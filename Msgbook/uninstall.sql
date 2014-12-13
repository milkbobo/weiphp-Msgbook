1418456813DELETE FROM `wp_attribute` WHERE model_id = (SELECT id FROM wp_model WHERE `name`='msg_content' ORDER BY id DESC LIMIT 1);
DELETE FROM `wp_model` WHERE `name`='msg_content' ORDER BY id DESC LIMIT 1;
DROP TABLE IF EXISTS `wp_msg_content`;