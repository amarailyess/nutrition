<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'list_all_personnes' => [[], ['_controller' => 'App\\Controller\\UsersController::getAllPersonnes'], [], [['text', '/api/personnes']], [], [], []],
    'show_admins' => [[], ['_controller' => 'App\\Controller\\UsersController::getAllAdmins'], [], [['text', '/api/admins']], [], [], []],
    'show_medecins' => [[], ['_controller' => 'App\\Controller\\UsersController::getAllMedecins'], [], [['text', '/api/medecins']], [], [], []],
    'show_users' => [[], ['_controller' => 'App\\Controller\\UsersController::getAllUsers'], [], [['text', '/api/users']], [], [], []],
    'show_personne' => [['id_person'], ['_controller' => 'App\\Controller\\UsersController::showPersonne'], [], [['variable', '/', '[^/]++', 'id_person', true], ['text', '/api/personne']], [], [], []],
    'add_personne' => [[], ['_controller' => 'App\\Controller\\UsersController::addPersonne'], [], [['text', '/api/personne/add']], [], [], []],
    'person_edit' => [['id_person'], ['_controller' => 'App\\Controller\\UsersController::updatePersonne'], [], [['text', '/update'], ['variable', '/', '[^/]++', 'id_person', true], ['text', '/api/personne']], [], [], []],
    'person_delete' => [['id_person'], ['_controller' => 'App\\Controller\\UsersController::deletePersonne'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id_person', true], ['text', '/api/personne']], [], [], []],
    'add_abonnee' => [['id_source', 'id_target'], ['_controller' => 'App\\Controller\\UsersController::Abonner'], [], [['text', '/abonner'], ['variable', '/', '[^/]++', 'id_target', true], ['variable', '/', '[^/]++', 'id_source', true], ['text', '/api/personne']], [], [], []],
    'delete_abonnee' => [['id_source', 'id_target'], ['_controller' => 'App\\Controller\\UsersController::Disabonner'], [], [['text', '/disabonner'], ['variable', '/', '[^/]++', 'id_target', true], ['variable', '/', '[^/]++', 'id_source', true], ['text', '/api/personne']], [], [], []],
    'show_all_roles' => [[], ['_controller' => 'App\\Controller\\RoleController::getAllRoles'], [], [['text', '/api/roles']], [], [], []],
    'add_role' => [[], ['_controller' => 'App\\Controller\\RoleController::addRole'], [], [['text', '/api/role/add']], [], [], []],
    'update_role' => [['role_id'], ['_controller' => 'App\\Controller\\RoleController::updateRole'], [], [['text', '/update'], ['variable', '/', '[^/]++', 'role_id', true], ['text', '/api/role']], [], [], []],
    'delete_role' => [['role_id'], ['_controller' => 'App\\Controller\\RoleController::deleteRole'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'role_id', true], ['text', '/api/role']], [], [], []],
    'show_all_permissions' => [[], ['_controller' => 'App\\Controller\\PermissionController::getAllPermissions'], [], [['text', '/api/permissions']], [], [], []],
    'add_new_permission' => [[], ['_controller' => 'App\\Controller\\PermissionController::addNewPermission'], [], [['text', '/api/permission/add']], [], [], []],
    'update_permission' => [['id_permission'], ['_controller' => 'App\\Controller\\PermissionController::updatePermission'], [], [['text', '/update'], ['variable', '/', '[^/]++', 'id_permission', true], ['text', '/api/permission']], [], [], []],
    'delete_permission' => [['id_permission'], ['_controller' => 'App\\Controller\\PermissionController::deletePermission'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id_permission', true], ['text', '/api/permission']], [], [], []],
    'liste_all_articles' => [[], ['_controller' => 'App\\Controller\\ArticleController::getAllArticles'], [], [['text', '/api/articles']], [], [], []],
    'article_show_by_maladie' => [[], ['_controller' => 'App\\Controller\\ArticleController::getArticlesByMaladie'], [], [['text', '/api/articles/maladie']], [], [], []],
    'article_show' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::getArticle'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/article']], [], [], []],
    'list_articles_medecin' => [['id_person'], ['_controller' => 'App\\Controller\\ArticleController::getArticlesOfMedecin'], [], [['text', '/articles'], ['variable', '/', '[^/]++', 'id_person', true], ['text', '/api/medecin']], [], [], []],
    'article_add' => [['personId'], ['_controller' => 'App\\Controller\\ArticleController::addArticleToPerson'], [], [['variable', '/', '[^/]++', 'personId', true], ['text', '/api/article/add']], [], [], []],
    'article_edit' => [['id_article'], ['_controller' => 'App\\Controller\\ArticleController::updateArticle'], [], [['text', '/update'], ['variable', '/', '[^/]++', 'id_article', true], ['text', '/api/article']], [], [], []],
    'article_delete' => [['id_article'], ['_controller' => 'App\\Controller\\ArticleController::deleteArticle'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id_article', true], ['text', '/api/article']], [], [], []],
    'show_all_consultations' => [[], ['_controller' => 'App\\Controller\\ConsultationController::getAllConsultations'], [], [['text', '/api/consultations']], [], [], []],
    'show_consultation' => [['id_consultation'], ['_controller' => 'App\\Controller\\ConsultationController::getConsultation'], [], [['variable', '/', '[^/]++', 'id_consultation', true], ['text', '/api/consultation']], [], [], []],
    'add_consultation' => [['id_medecin', 'id_user'], ['_controller' => 'App\\Controller\\ConsultationController::addConsultation'], [], [['text', '/add'], ['variable', '/', '[^/]++', 'id_user', true], ['variable', '/', '[^/]++', 'id_medecin', true], ['text', '/api/consultation']], [], [], []],
    'update_consultation' => [['id_consultation'], ['_controller' => 'App\\Controller\\ConsultationController::updateConsultation'], [], [['text', '/update'], ['variable', '/', '[^/]++', 'id_consultation', true], ['text', '/api/consultation']], [], [], []],
    'delete_consultation' => [['id_consultation'], ['_controller' => 'App\\Controller\\ConsultationController::deleteConsultation'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id_consultation', true], ['text', '/api/consultation']], [], [], []],
    'show_all_posts' => [[], ['_controller' => 'App\\Controller\\PostController::getAllPosts'], [], [['text', '/api/posts']], [], [], []],
    'add_post' => [['id_personne', 'id_article'], ['_controller' => 'App\\Controller\\PostController::addCommentaire'], [], [['text', '/add'], ['variable', '/', '[^/]++', 'id_article', true], ['variable', '/', '[^/]++', 'id_personne', true], ['text', '/api/commentaire']], [], [], []],
    'update_post' => [['id_post'], ['_controller' => 'App\\Controller\\PostController::updateCommentaire'], [], [['text', '/update'], ['variable', '/', '[^/]++', 'id_post', true], ['text', '/api/commentaire']], [], [], []],
    'delete_post' => [['id_post'], ['_controller' => 'App\\Controller\\PostController::deleteCommentaire'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id_post', true], ['text', '/api/commentaire']], [], [], []],
    'show_all_reactions' => [[], ['_controller' => 'App\\Controller\\ReactionController::getAllReactions'], [], [['text', '/api/reactions']], [], [], []],
    'add_reaction' => [['id_personne', 'id_article'], ['_controller' => 'App\\Controller\\ReactionController::Like'], [], [['text', '/like'], ['variable', '/', '[^/]++', 'id_article', true], ['variable', '/', '[^/]++', 'id_personne', true], ['text', '/api/reaction']], [], [], []],
    'update_reaction' => [['id_personne', 'id_article'], ['_controller' => 'App\\Controller\\ReactionController::Dislike'], [], [['text', '/dislike'], ['variable', '/', '[^/]++', 'id_article', true], ['variable', '/', '[^/]++', 'id_personne', true], ['text', '/api/reaction']], [], [], []],
    'add_image' => [[], ['_controller' => 'App\\Controller\\ImageController::addImage'], [], [['text', '/api/addimage']], [], [], []],
    'delete_image' => [[], ['_controller' => 'App\\Controller\\ImageController::deleteImage'], [], [['text', '/api/deleteimage']], [], [], []],
    'test_image' => [[], ['_controller' => 'App\\Controller\\ImageController::testImage'], [], [['text', '/api/testimage']], [], [], []],
];