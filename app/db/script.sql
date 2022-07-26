-- POSTGRESQL
-- CREATE DATABASE db_filemanager;

CREATE TABLE "tbl_rol"
(
    "rol_id" SERIAL PRIMARY KEY,
    "rol_description" VARCHAR(100) NOT NULL UNIQUE,
    "rol_created_at" TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    "rol_status" SMALLINT NOT NULL DEFAULT 1
);
CREATE TABLE "tbl_user"
(
    "user_id" SERIAL PRIMARY KEY,
    "user_names" VARCHAR(100) NOT NULL,
    "user_phone" VARCHAR(10) NULL,
    "user_url_networking" VARCHAR(50) NULL,
    "user_photo" VARCHAR(255) NULL,
    "user_email" VARCHAR(150) NOT NULL UNIQUE,
    "user_password" VARCHAR(255) NOT NULL,
    "user_rol_id" INTEGER NOT NULL,
    "user_created_at" TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    "user_updated_at" TIMESTAMP NULL,
    "user_status" SMALLINT NOT NULL DEFAULT 1
);
CREATE TABLE "tbl_file"
(
    "file_id" SERIAL PRIMARY KEY,
    "file_name" VARCHAR(255) NOT NULL,
    "file_path" VARCHAR(255) NOT NULL,
    "file_size" INTEGER NOT NULL,
    "file_type" VARCHAR(255) NOT NULL,
    "file_user_id" INTEGER NOT NULL,
    "file_created_at" TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    "file_updated_at" TIMESTAMP NULL,
    "file_status" SMALLINT NOT NULL DEFAULT 1
);

ALTER TABLE "tbl_user" ADD CONSTRAINT "fk_user_rol" FOREIGN KEY ("user_rol_id") REFERENCES "tbl_rol" ("rol_id") ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE "tbl_file" ADD CONSTRAINT "fk_file_user" FOREIGN KEY ("file_user_id") REFERENCES "tbl_user" ("user_id") ON DELETE CASCADE ON UPDATE CASCADE;

-- rol
INSERT INTO "tbl_rol" ("rol_id", "rol_description") VALUES (1, 'ADMINISTRATOR');
INSERT INTO "tbl_rol" ("rol_id", "rol_description") VALUES (2, 'CLIENT');
--user admin
INSERT INTO "tbl_user" ("user_names","user_email", "user_password", "user_rol_id") VALUES ('Administrator', 'admin@admin.com', 'QTgyTDFRM1JNS2JxRVVVak5NNVZoUT09', 1);


-- INSERT INTO "tbl_file" ("file_id", "file_name", "file_path", "file_size", "file_type", "file_user_id") VALUES (1, 'file1.jpg', 'C:/file1.jpg', 100, 'image/jpeg', 1);
-- END POSTGRESQL