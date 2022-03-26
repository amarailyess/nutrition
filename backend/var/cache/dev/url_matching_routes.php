<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/personnes' => [[['_route' => 'list_all_personnes', '_controller' => 'App\\Controller\\UsersController::getAllPersonnes'], null, ['GET' => 0], null, false, false, null]],
        '/api/admins' => [[['_route' => 'show_admins', '_controller' => 'App\\Controller\\UsersController::getAllAdmins'], null, ['GET' => 0], null, false, false, null]],
        '/api/medecins' => [[['_route' => 'show_medecins', '_controller' => 'App\\Controller\\UsersController::getAllMedecins'], null, ['GET' => 0], null, false, false, null]],
        '/api/users' => [[['_route' => 'show_users', '_controller' => 'App\\Controller\\UsersController::getAllUsers'], null, ['GET' => 0], null, false, false, null]],
        '/api/roles' => [[['_route' => 'show_all_roles', '_controller' => 'App\\Controller\\RoleController::getAllRoles'], null, ['GET' => 0], null, false, false, null]],
        '/api/role/add' => [[['_route' => 'add_role', '_controller' => 'App\\Controller\\RoleController::addRole'], null, ['POST' => 0], null, false, false, null]],
        '/api/permissions' => [[['_route' => 'show_all_permissions', '_controller' => 'App\\Controller\\PermissionController::getAllPermissions'], null, ['GET' => 0], null, false, false, null]],
        '/api/permission/add' => [[['_route' => 'add_new_permission', '_controller' => 'App\\Controller\\PermissionController::addNewPermission'], null, ['POST' => 0], null, false, false, null]],
        '/api/articles' => [[['_route' => 'liste_all_articles', '_controller' => 'App\\Controller\\ArticleController::getAllArticles'], null, ['GET' => 0], null, false, false, null]],
        '/api/articles/maladie' => [[['_route' => 'article_show_by_maladie', '_controller' => 'App\\Controller\\ArticleController::getArticlesByMaladie'], null, ['POST' => 0], null, false, false, null]],
        '/api/consultations' => [[['_route' => 'show_all_consultations', '_controller' => 'App\\Controller\\ConsultationController::getAllConsultations'], null, ['GET' => 0], null, false, false, null]],
        '/api/posts' => [[['_route' => 'show_all_posts', '_controller' => 'App\\Controller\\PostController::getAllPosts'], null, ['GET' => 0], null, false, false, null]],
        '/api/reactions' => [[['_route' => 'show_all_reactions', '_controller' => 'App\\Controller\\ReactionController::getAllReactions'], null, ['GET' => 0], null, false, false, null]],
        '/api/addimage' => [[['_route' => 'add_image', '_controller' => 'App\\Controller\\ImageController::addImage'], null, ['POST' => 0], null, false, false, null]],
        '/api/deleteimage' => [[['_route' => 'delete_image', '_controller' => 'App\\Controller\\ImageController::deleteImage'], null, ['DELETE' => 0], null, false, false, null]],
        '/api/testimage' => [[['_route' => 'test_image', '_controller' => 'App\\Controller\\ImageController::testImage'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api/(?'
                    .'|per(?'
                        .'|sonne/(?'
                            .'|([^/]++)(*:73)'
                            .'|add(*:83)'
                            .'|([^/]++)/(?'
                                .'|update(*:108)'
                                .'|delete(*:122)'
                                .'|([^/]++)/(?'
                                    .'|abonner(*:149)'
                                    .'|disabonner(*:167)'
                                .')'
                            .')'
                        .')'
                        .'|mission/([^/]++)/(?'
                            .'|update(*:204)'
                            .'|delete(*:218)'
                        .')'
                    .')'
                    .'|r(?'
                        .'|ole/([^/]++)/(?'
                            .'|update(*:254)'
                            .'|delete(*:268)'
                        .')'
                        .'|eaction/([^/]++)/([^/]++)/(?'
                            .'|like(*:310)'
                            .'|dislike(*:325)'
                        .')'
                    .')'
                    .'|article/(?'
                        .'|([^/]++)(*:354)'
                        .'|add/([^/]++)(*:374)'
                        .'|([^/]++)/(?'
                            .'|update(*:400)'
                            .'|delete(*:414)'
                        .')'
                    .')'
                    .'|medecin/([^/]++)/articles(*:449)'
                    .'|co(?'
                        .'|nsultation/([^/]++)(?'
                            .'|(*:484)'
                            .'|/(?'
                                .'|([^/]++)/add(*:508)'
                                .'|update(*:522)'
                                .'|delete(*:536)'
                            .')'
                        .')'
                        .'|mmentaire/([^/]++)/(?'
                            .'|([^/]++)/add(*:580)'
                            .'|update(*:594)'
                            .'|delete(*:608)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        73 => [[['_route' => 'show_personne', '_controller' => 'App\\Controller\\UsersController::showPersonne'], ['id_person'], ['GET' => 0], null, false, true, null]],
        83 => [[['_route' => 'add_personne', '_controller' => 'App\\Controller\\UsersController::addPersonne'], [], ['POST' => 0], null, false, false, null]],
        108 => [[['_route' => 'person_edit', '_controller' => 'App\\Controller\\UsersController::updatePersonne'], ['id_person'], ['POST' => 0], null, false, false, null]],
        122 => [[['_route' => 'person_delete', '_controller' => 'App\\Controller\\UsersController::deletePersonne'], ['id_person'], ['DELETE' => 0], null, false, false, null]],
        149 => [[['_route' => 'add_abonnee', '_controller' => 'App\\Controller\\UsersController::Abonner'], ['id_source', 'id_target'], ['GET' => 0], null, false, false, null]],
        167 => [[['_route' => 'delete_abonnee', '_controller' => 'App\\Controller\\UsersController::Disabonner'], ['id_source', 'id_target'], ['GET' => 0], null, false, false, null]],
        204 => [[['_route' => 'update_permission', '_controller' => 'App\\Controller\\PermissionController::updatePermission'], ['id_permission'], ['PUT' => 0], null, false, false, null]],
        218 => [[['_route' => 'delete_permission', '_controller' => 'App\\Controller\\PermissionController::deletePermission'], ['id_permission'], ['DELETE' => 0], null, false, false, null]],
        254 => [[['_route' => 'update_role', '_controller' => 'App\\Controller\\RoleController::updateRole'], ['role_id'], ['PUT' => 0], null, false, false, null]],
        268 => [[['_route' => 'delete_role', '_controller' => 'App\\Controller\\RoleController::deleteRole'], ['role_id'], ['DELETE' => 0], null, false, false, null]],
        310 => [[['_route' => 'add_reaction', '_controller' => 'App\\Controller\\ReactionController::Like'], ['id_personne', 'id_article'], ['GET' => 0], null, false, false, null]],
        325 => [[['_route' => 'update_reaction', '_controller' => 'App\\Controller\\ReactionController::Dislike'], ['id_personne', 'id_article'], ['GET' => 0], null, false, false, null]],
        354 => [[['_route' => 'article_show', '_controller' => 'App\\Controller\\ArticleController::getArticle'], ['id'], ['GET' => 0], null, false, true, null]],
        374 => [[['_route' => 'article_add', '_controller' => 'App\\Controller\\ArticleController::addArticleToPerson'], ['personId'], ['POST' => 0], null, false, true, null]],
        400 => [[['_route' => 'article_edit', '_controller' => 'App\\Controller\\ArticleController::updateArticle'], ['id_article'], ['POST' => 0], null, false, false, null]],
        414 => [[['_route' => 'article_delete', '_controller' => 'App\\Controller\\ArticleController::deleteArticle'], ['id_article'], ['DELETE' => 0], null, false, false, null]],
        449 => [[['_route' => 'list_articles_medecin', '_controller' => 'App\\Controller\\ArticleController::getArticlesOfMedecin'], ['id_person'], ['GET' => 0], null, false, false, null]],
        484 => [[['_route' => 'show_consultation', '_controller' => 'App\\Controller\\ConsultationController::getConsultation'], ['id_consultation'], ['GET' => 0], null, false, true, null]],
        508 => [[['_route' => 'add_consultation', '_controller' => 'App\\Controller\\ConsultationController::addConsultation'], ['id_medecin', 'id_user'], ['POST' => 0], null, false, false, null]],
        522 => [[['_route' => 'update_consultation', '_controller' => 'App\\Controller\\ConsultationController::updateConsultation'], ['id_consultation'], ['PUT' => 0], null, false, false, null]],
        536 => [[['_route' => 'delete_consultation', '_controller' => 'App\\Controller\\ConsultationController::deleteConsultation'], ['id_consultation'], ['DELETE' => 0], null, false, false, null]],
        580 => [[['_route' => 'add_post', '_controller' => 'App\\Controller\\PostController::addCommentaire'], ['id_personne', 'id_article'], ['POST' => 0], null, false, false, null]],
        594 => [[['_route' => 'update_post', '_controller' => 'App\\Controller\\PostController::updateCommentaire'], ['id_post'], ['PUT' => 0], null, false, false, null]],
        608 => [
            [['_route' => 'delete_post', '_controller' => 'App\\Controller\\PostController::deleteCommentaire'], ['id_post'], ['DELETE' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
