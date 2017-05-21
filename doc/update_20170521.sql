--
-- SQL update script for https://github.com/Elektordi/pacha/issues/35
--

ALTER TABLE `soins` CHANGE `nature` `nature` VARCHAR(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nature des soins',
                    CHANGE `montant` `montant` DECIMAL(5,2) NULL DEFAULT NULL COMMENT 'Montant';

ALTER TABLE `chats` CHANGE `race` `race` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL COMMENT 'Race',
                    CHANGE `robe` `robe` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL COMMENT 'Robe';


