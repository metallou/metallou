<?php

declare(strict_types=1);

namespace App\Service;

use App\Collection\ExperienceCollection;
use App\Collection\ProjectCollection;
use App\Model\ExperienceModel;
use App\Model\InfosModel;
use App\Model\LocationModel;
use App\Model\ProjectModel;
use DateTimeImmutable;
use Ramsey\Collection\CollectionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Contracts\HttpClient\HttpClientInterface;

/**
 * 
 */
class ProjectService
{
    private HttpClientInterface $client;
    private string $personalAccessToken;

    /**
     * 
     */
    public function __construct(
        HttpClientInterface $httpClient,
        ParameterBagInterface $parameterBag
    ) {
        $this->client = $httpClient;
        $this->personalAccessToken = $parameterBag->get('github.pat');
    }

    /**
     * 
     */
    public function get(): ProjectCollection
    {
        $projects = array_map(
            [
                $this,
                'build',
            ],
            [
                'metallou',
                'aquabellum',
            ],
        );

        return new ProjectCollection($projects);
    }

    /**
     * 
     */
    private function build(
        string $name
    ): ProjectModel {
        $query = <<<'GRAPHQL'
query Repository($name: String!) {
    repository(owner:"metallou",name:$name) {
        description
        homepageUrl
        languages(first:5,orderBy:{direction:DESC,field:SIZE}) {
            nodes {
                color
                name
            }
        }
        name
        openGraphImageUrl
        repositoryTopics(first:5) {
            nodes {
                topic {
                    name
                }
            }
        }
        url
        usesCustomOpenGraphImage
    }
}
GRAPHQL;
        $body = \json_encode(
            [
                'query' => $query,
                'variables' => [
                    'name' => $name,
                ],
            ]
        );

        $result = $this->client
            ->request(
                'POST',
                'https://api.github.com/graphql',
                [
                    'auth_bearer' => $this->personalAccessToken,
                    'body' => $body,
                ]
            )
            ->toArray(true);

        $description = $result['data']['repository']['description'];
        $homepage = $result['data']['repository']['homepageUrl'];
        $image = $result['data']['repository']['openGraphImageUrl'];
        $imageCustom = $result['data']['repository']['usesCustomOpenGraphImage'];
        $name = $result['data']['repository']['name'];
        $languages = $result['data']['repository']['languages']['nodes'];
        $repository = $result['data']['repository']['url'];
        $topics = array_map(
            static function (
                array $data
            ): string {
                return $data['topic']['name'];
            },
            $result['data']['repository']['repositoryTopics']['nodes']
        );

        return new ProjectModel(
            $description,
            $homepage,
            $image,
            $imageCustom,
            $languages,
            $name,
            $repository,
            $topics,
        );
    }
}
