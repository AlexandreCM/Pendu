DELETE FROM utilisateur;
ALTER TABLE utilisateur CHANGE UTI_PSW UTI_PSW VARCHAR(64) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;