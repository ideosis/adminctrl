DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` integer NOT NULL AUTO_INCREMENT,
  `category_name` varchar(256) NOT NULL,
  `category_slug` varchar(256) NOT NULL,
  `created_at` datetime,
  `updated_at` datetime,
  PRIMARY KEY (`id`)
);

CREATE UNIQUE INDEX categories_category_slug_unique ON `categories` (category_slug);
INSERT INTO `categories` (`id`,`category_name`,`category_slug`,`created_at`,`updated_at`) VALUES (1,'Unde','unde','2018-04-25 21:05:50','2018-04-25 21:05:50');
INSERT INTO `categories` (`id`,`category_name`,`category_slug`,`created_at`,`updated_at`) VALUES (2,'Aliquam','aliquam','2018-04-25 21:05:50','2018-04-25 21:05:50');
INSERT INTO `categories` (`id`,`category_name`,`category_slug`,`created_at`,`updated_at`) VALUES (3,'Aut','aut','2018-04-25 21:05:50','2018-04-25 21:05:50');
INSERT INTO `categories` (`id`,`category_name`,`category_slug`,`created_at`,`updated_at`) VALUES (4,'Aspernatur','aspernatur','2018-04-25 21:05:50','2018-04-25 21:05:50');
INSERT INTO `categories` (`id`,`category_name`,`category_slug`,`created_at`,`updated_at`) VALUES (5,'Dolor','dolor','2018-04-25 21:05:50','2018-04-25 21:05:50');
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` integer NOT NULL AUTO_INCREMENT,
  `post_id` integer NOT NULL,
  `user_id` integer NOT NULL,
  `comment_author` text NOT NULL,
  `comment_author_email` varchar(256) NOT NULL,
  `comment_author_url` varchar(256) NOT NULL,
  `comment_author_IP` varchar(256) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_approved` varchar(256) NOT NULL,
  `created_at` datetime,
  `updated_at` datetime,
  PRIMARY KEY (`id`)
);


DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` integer NOT NULL AUTO_INCREMENT,
  `migration` varchar(256) NOT NULL,
  `batch` integer NOT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES (37,'2014_10_12_000000_create_users_table',1);
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES (38,'2014_10_12_100000_create_password_resets_table',1);
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES (39,'2018_02_19_185730_create_posts_table',1);
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES (40,'2018_03_21_050826_create_categories_table',1);
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES (41,'2018_03_21_050911_create_comments_table',1);
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES (42,'2018_04_24_225719_create_roles_table',1);
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(256) NOT NULL,
  `token` varchar(256) NOT NULL,
  `created_at` datetime
);

CREATE INDEX password_resets_email_index ON `password_resets` (email);

DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` integer NOT NULL AUTO_INCREMENT,
  `post_type` varchar(256) NOT NULL,
  `user_id` integer NOT NULL,
  `post_title` text NOT NULL,
  `post_slug` varchar(256) NOT NULL,
  `post_content` text NOT NULL,
  `category_id` integer,
  `created_at` datetime,
  `updated_at` datetime,
  PRIMARY KEY (`id`)
);

INSERT INTO `posts` (`id`,`post_type`,`user_id`,`post_title`,`post_slug`,`post_content`,`category_id`,`created_at`,`updated_at`) VALUES (1,'post',1,'For some minutes it seemed quite natural to.','for-some-minutes-it-seemed-quite-natural-to','Nostrum qui qui vitae quo aut dolor. Incidunt ad eius ut. Est iusto perferendis culpa expedita aut officia eius. Cum error est perferendis molestias alias odio corrupti.',4,'2018-04-25 21:05:50','2018-04-25 21:05:50');
INSERT INTO `posts` (`id`,`post_type`,`user_id`,`post_title`,`post_slug`,`post_content`,`category_id`,`created_at`,`updated_at`) VALUES (2,'post',1,'Duchess: \'and the moral of that is--"Be what you.','duchess-and-the-moral-of-that-is-be-what-you','Ut praesentium consequuntur dolorem ex est quod quo. Voluptas quia aut repellat debitis eaque id eius. Est odio voluptate alias aliquid. Nam praesentium quis et.',1,'2018-04-25 21:05:50','2018-04-25 21:05:50');
INSERT INTO `posts` (`id`,`post_type`,`user_id`,`post_title`,`post_slug`,`post_content`,`category_id`,`created_at`,`updated_at`) VALUES (3,'post',1,'Alice to herself. \'I dare say you never even.','alice-to-herself-i-dare-say-you-never-even','Ipsum error sint ut consequatur. Exercitationem odit asperiores minima. Consequuntur ut omnis et voluptatem impedit. Quae porro atque dolores velit ea.',2,'2018-04-25 21:05:50','2018-04-25 21:05:50');
INSERT INTO `posts` (`id`,`post_type`,`user_id`,`post_title`,`post_slug`,`post_content`,`category_id`,`created_at`,`updated_at`) VALUES (4,'post',1,'THE KING AND QUEEN OF HEARTS. Alice was very.','the-king-and-queen-of-hearts-alice-was-very','Pariatur magnam unde delectus quibusdam facilis. Et asperiores dolore et corporis rerum sint. Rerum illo exercitationem accusamus debitis. Corrupti sunt non sit modi repellat. Itaque officia aut qui odit id voluptates ipsum.',3,'2018-04-25 21:05:50','2018-04-25 21:05:50');
INSERT INTO `posts` (`id`,`post_type`,`user_id`,`post_title`,`post_slug`,`post_content`,`category_id`,`created_at`,`updated_at`) VALUES (5,'post',1,'I wish I could shut up like a frog; and both the.','i-wish-i-could-shut-up-like-a-frog-and-both-the','Fugiat vitae voluptatem doloribus ab fugit. Omnis ipsum expedita eius. Doloribus eligendi iure dolores nisi autem voluptatem.',3,'2018-04-25 21:05:50','2018-04-25 21:05:50');
INSERT INTO `posts` (`id`,`post_type`,`user_id`,`post_title`,`post_slug`,`post_content`,`category_id`,`created_at`,`updated_at`) VALUES (6,'post',1,'Alice. \'I\'ve tried every way, and the baby at.','alice-ive-tried-every-way-and-the-baby-at','Tempora repellendus in sit omnis sed est. Animi accusantium quae ipsum neque quod hic nihil. Autem porro magnam eos sint quisquam labore qui. Earum ut qui ut sit itaque.',1,'2018-04-25 21:05:50','2018-04-25 21:05:50');
INSERT INTO `posts` (`id`,`post_type`,`user_id`,`post_title`,`post_slug`,`post_content`,`category_id`,`created_at`,`updated_at`) VALUES (7,'post',1,'Alice was only a mouse that had a head could be.','alice-was-only-a-mouse-that-had-a-head-could-be','Adipisci nobis id velit expedita laudantium sunt. Pariatur dolorem quibusdam dolorum tempora. Delectus voluptate magnam at consequuntur placeat quisquam. Rerum cumque aut rerum animi iste.',3,'2018-04-25 21:05:50','2018-04-25 21:05:50');
INSERT INTO `posts` (`id`,`post_type`,`user_id`,`post_title`,`post_slug`,`post_content`,`category_id`,`created_at`,`updated_at`) VALUES (8,'post',1,'Alice replied very readily: \'but that\'s because.','alice-replied-very-readily-but-thats-because','Soluta aut ut assumenda doloremque accusantium delectus. Fuga minus explicabo placeat delectus quam sunt. Officiis exercitationem ipsum maxime magnam dignissimos perferendis numquam.',5,'2018-04-25 21:05:50','2018-04-25 21:05:50');
INSERT INTO `posts` (`id`,`post_type`,`user_id`,`post_title`,`post_slug`,`post_content`,`category_id`,`created_at`,`updated_at`) VALUES (9,'post',1,'VERY remarkable in that; nor did Alice think it.','very-remarkable-in-that-nor-did-alice-think-it','Quae consequatur id nesciunt eveniet porro nulla alias provident. Dolorem in voluptate commodi non omnis officiis rerum. Aliquam hic non est placeat qui iure ratione. Dicta et cum ut non quia.',4,'2018-04-25 21:05:50','2018-04-25 21:05:50');
INSERT INTO `posts` (`id`,`post_type`,`user_id`,`post_title`,`post_slug`,`post_content`,`category_id`,`created_at`,`updated_at`) VALUES (10,'post',1,'Gryphon. \'It\'s all her riper years, the simple.','gryphon-its-all-her-riper-years-the-simple','Sed debitis esse ut officia. Perspiciatis quia rerum est est. Dolores omnis provident officiis perspiciatis distinctio repudiandae. Beatae possimus sint sit nostrum omnis deleniti.',1,'2018-04-25 21:05:50','2018-04-25 21:05:50');
INSERT INTO `posts` (`id`,`post_type`,`user_id`,`post_title`,`post_slug`,`post_content`,`category_id`,`created_at`,`updated_at`) VALUES (11,'post',1,'Magpie began wrapping itself up very sulkily and.','magpie-began-wrapping-itself-up-very-sulkily-and','Nisi non eius sed officia aliquid atque. Omnis animi amet eaque quia dignissimos iusto. Debitis quasi molestias quasi ab.',5,'2018-04-25 21:05:50','2018-04-25 21:05:50');
INSERT INTO `posts` (`id`,`post_type`,`user_id`,`post_title`,`post_slug`,`post_content`,`category_id`,`created_at`,`updated_at`) VALUES (12,'post',1,'COULD grin.\' \'They all can,\' said the King.','could-grin-they-all-can-said-the-king','Laborum cupiditate inventore in quis. Voluptate minima et quia asperiores aspernatur libero id. Aut aut eum rem et optio fuga consequatur aut.',5,'2018-04-25 21:05:50','2018-04-25 21:05:50');
INSERT INTO `posts` (`id`,`post_type`,`user_id`,`post_title`,`post_slug`,`post_content`,`category_id`,`created_at`,`updated_at`) VALUES (13,'post',1,'Come on!\' So they got settled down again into.','come-on-so-they-got-settled-down-again-into','Consectetur necessitatibus voluptas corporis ea est eos. Omnis consectetur minus nihil vel. Qui earum sapiente non nulla delectus nam quis dicta.',2,'2018-04-25 21:05:50','2018-04-25 21:05:50');
INSERT INTO `posts` (`id`,`post_type`,`user_id`,`post_title`,`post_slug`,`post_content`,`category_id`,`created_at`,`updated_at`) VALUES (14,'post',1,'Imagine her surprise, when the Rabbit hastily.','imagine-her-surprise-when-the-rabbit-hastily','Commodi molestiae est et qui. Et non sed commodi qui blanditiis aut. Excepturi hic sunt tempore autem et. Minima ullam iusto aliquam veritatis sit voluptatum quia consequuntur. Amet in fugiat dicta nesciunt quis vero consequatur sit.',5,'2018-04-25 21:05:50','2018-04-25 21:05:50');
INSERT INTO `posts` (`id`,`post_type`,`user_id`,`post_title`,`post_slug`,`post_content`,`category_id`,`created_at`,`updated_at`) VALUES (15,'post',1,'I should frighten them out of sight. Alice.','i-should-frighten-them-out-of-sight-alice','Est corrupti autem perferendis est magnam. Nemo mollitia quidem aut earum nulla. Error consequatur similique dolorem corrupti praesentium. Consectetur et nihil minus molestiae quisquam quia.',4,'2018-04-25 21:05:50','2018-04-25 21:05:50');
INSERT INTO `posts` (`id`,`post_type`,`user_id`,`post_title`,`post_slug`,`post_content`,`category_id`,`created_at`,`updated_at`) VALUES (16,'post',1,'YOU with us!"\' \'They were learning to draw, you.','you-with-us-they-were-learning-to-draw-you','Qui unde minus est nam. Mollitia voluptatibus deleniti commodi earum nam. Ea et itaque sit sed beatae animi.',1,'2018-04-25 21:05:50','2018-04-25 21:05:50');
INSERT INTO `posts` (`id`,`post_type`,`user_id`,`post_title`,`post_slug`,`post_content`,`category_id`,`created_at`,`updated_at`) VALUES (17,'post',1,'I have dropped them, I wonder?\' Alice guessed.','i-have-dropped-them-i-wonder-alice-guessed','Et consequuntur accusamus reiciendis fugit. Qui totam repellat deleniti architecto. Aut et voluptas quia ipsa. Consequuntur consequuntur eligendi rerum consequatur ab omnis.',3,'2018-04-25 21:05:50','2018-04-25 21:05:50');
INSERT INTO `posts` (`id`,`post_type`,`user_id`,`post_title`,`post_slug`,`post_content`,`category_id`,`created_at`,`updated_at`) VALUES (18,'post',1,'So she set to partners--\' \'--change lobsters.','so-she-set-to-partners-change-lobsters','Dolor ut praesentium aperiam minima et. Quia earum libero porro consectetur iusto aspernatur non. Adipisci neque eligendi voluptatem aliquam ut consequuntur laudantium. Nemo quia porro voluptas hic et.',2,'2018-04-25 21:05:50','2018-04-25 21:05:50');
INSERT INTO `posts` (`id`,`post_type`,`user_id`,`post_title`,`post_slug`,`post_content`,`category_id`,`created_at`,`updated_at`) VALUES (19,'post',1,'I\'m Mabel, I\'ll stay down here! It\'ll be no sort.','im-mabel-ill-stay-down-here-itll-be-no-sort','Eum impedit exercitationem fugiat suscipit est dolor. Natus suscipit molestias nihil voluptatem sed non quia quasi. At recusandae excepturi autem voluptates eius.',3,'2018-04-25 21:05:50','2018-04-25 21:05:50');
INSERT INTO `posts` (`id`,`post_type`,`user_id`,`post_title`,`post_slug`,`post_content`,`category_id`,`created_at`,`updated_at`) VALUES (20,'post',1,'I hadn\'t mentioned Dinah!\' she said to herself.','i-hadnt-mentioned-dinah-she-said-to-herself','Quas reprehenderit odit fugit aut. Molestiae ipsum aut nam eum quae aut voluptatem ut. Sit quia laudantium voluptate sunt. Ipsam aut accusamus et odio in consequatur fugit.',1,'2018-04-25 21:05:50','2018-04-25 21:05:50');
INSERT INTO `posts` (`id`,`post_type`,`user_id`,`post_title`,`post_slug`,`post_content`,`category_id`,`created_at`,`updated_at`) VALUES (21,'page',1,'Home','/','Delectus in eum quo sunt rem. Explicabo rerum ratione voluptates mollitia repellendus. Iusto explicabo rerum alias sunt sed quasi qui. Error omnis qui alias sunt eum iste qui.',NULL,'2018-04-25 21:05:50','2018-04-25 21:05:50');
INSERT INTO `posts` (`id`,`post_type`,`user_id`,`post_title`,`post_slug`,`post_content`,`category_id`,`created_at`,`updated_at`) VALUES (22,'page',1,'About','about','Natus commodi aspernatur et et blanditiis. Vero sit amet qui quidem. Consequatur officia sit perspiciatis repudiandae quia. Quo excepturi adipisci eum quasi.',NULL,'2018-04-25 21:05:50','2018-04-25 21:05:50');
INSERT INTO `posts` (`id`,`post_type`,`user_id`,`post_title`,`post_slug`,`post_content`,`category_id`,`created_at`,`updated_at`) VALUES (23,'page',1,'Contact','contact','Nam vel est quibusdam quia eum. Tenetur dolorem cupiditate aliquid velit praesentium. Eligendi exercitationem earum fugiat ex qui nihil tempore. Ex quis aliquam eius magni.',NULL,'2018-04-25 21:05:50','2018-04-25 21:05:50');
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` integer NOT NULL AUTO_INCREMENT,
  `role` varchar(256) NOT NULL,
  `created_at` datetime,
  `updated_at` datetime,
  PRIMARY KEY (`id`)
);

INSERT INTO `roles` (`id`,`role`,`created_at`,`updated_at`) VALUES (1,'Admin','2018-04-25 21:05:49','2018-04-25 21:05:49');
INSERT INTO `roles` (`id`,`role`,`created_at`,`updated_at`) VALUES (2,'User','2018-04-25 21:05:49','2018-04-25 21:05:49');
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` integer NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` integer NOT NULL,
  `remember_token` varchar(256),
  `created_at` datetime,
  `updated_at` datetime,
  PRIMARY KEY (`id`)
);

CREATE UNIQUE INDEX users_email_unique ON `users` (email);
INSERT INTO `users` (`id`,`name`,`email`,`password`,`role_id`,`remember_token`,`created_at`,`updated_at`) VALUES (1,'John Doe','admin@example.com','$2y$10$rUdGdcusxdIOWQRbZz.j/OOpFZuu3dMx1hRdGWfEnBSd4hq72b0Ma',1,NULL,'2018-04-25 21:05:49','2018-04-25 21:05:49');
INSERT INTO `users` (`id`,`name`,`email`,`password`,`role_id`,`remember_token`,`created_at`,`updated_at`) VALUES (2,'Hugh Quach','user@example.com','$2y$10$9vZOx/bH4GOnGsvw.iWTUudQvAiHW9QpX.mGBVLeruooPtekyvah6',2,NULL,'2018-04-25 21:05:50','2018-04-25 21:05:50');