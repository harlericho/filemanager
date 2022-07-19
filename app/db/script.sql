-- POSTGRESQL
CREATE DATABASE IF NOT EXISTS "db_filemanager";
USE "db_filemanager";
CREATE TABLE IF NOT EXISTS "tbl_rol"
{
    "rol_id" SERIAL PRIMARY KEY,
    "rol_description" VARCHAR(100) NOT NULL UNIQUE,
    "rol_created_at" TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    "rol_updated_at" TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    "rol_status" SMALLINT NOT NULL DEFAULT 1
};
CREATE TABLE IF NOT EXISTS "tbl_user"
{
    "user_id" SERIAL PRIMARY KEY,
    "user_names" VARCHAR(100) NOT NULL,
    "user_telefono" VARCHAR(10) NOT NULL,
    "user_url_networking" VARCHAR(50) NOT NULL,
    "user_photo" VARCHAR(255) NULL,
    "user_email" VARCHAR(150) NOT NULL UNIQUE,
    "user_password" VARCHAR(255) NOT NULL,
    "user_rol_id" INTEGER NOT NULL,
    "user_created_at" TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    "user_updated_at" TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    "user_status" SMALLINT NOT NULL DEFAULT 1,
};
CREATE TABLE IF NOT EXISTS "tbl_file"
{
    "file_id" SERIAL PRIMARY KEY,
    "file_name" VARCHAR(255) NOT NULL,
    "file_path" VARCHAR(255) NOT NULL,
    "file_size" INTEGER NOT NULL,
    "file_type" VARCHAR(255) NOT NULL,
    "file_user_id" INTEGER NOT NULL,
    "file_created_at" TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    "file_updated_at" TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    "file_status" SMALLINT NOT NULL DEFAULT 1,
};
CONSTRAINT "fk_file_user_id" FOREIGN KEY ("file_user_id") REFERENCES "tbl_user" ("user_id") ON DELETE CASCADE;
CONSTRAINT "fk_rol_user_id" FOREIGN KEY ("user_rol_id") REFERENCES "tbl_rol" ("rol_id") ON DELETE CASCADE;
-- END POSTGRESQL