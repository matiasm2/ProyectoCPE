BEGIN;
	DO
	$body$
	BEGIN
		IF NOT EXISTS (
		   SELECT *
		   FROM pg_catalog.pg_user
		   WHERE usename = 'cpedba') THEN

		   CREATE ROLE cpedba LOGIN PASSWORD 'unaj1234';
		END IF;
		IF NOT EXISTS (
                   SELECT *
                   FROM pg_catalog.pg_user
                   WHERE usename = 'cpewebuser') THEN

                   CREATE ROLE cpewebuser LOGIN PASSWORD 'unaj1234';
                END IF;
	END
	$body$;

	ALTER ROLE cpewebuser WITH NOSUPERUSER NOCREATEDB;
	GRANT CONNECT ON DATABASE cpe_db TO cpewebuser;
	GRANT SELECT, INSERT, UPDATE ON ALL TABLES IN SCHEMA public TO cpewebuser;
	ALTER ROLE cpedba WITH CREATEDB SUPERUSER;
        GRANT CONNECT ON DATABASE cpe_db TO cpedba;
        GRANT SELECT, INSERT, UPDATE ON ALL TABLES IN SCHEMA public TO cpedba;

	CREATE TABLE sector (
	       sector_id    SERIAL PRIMARY KEY,
	       descripcion   varchar(40)
	);

	CREATE TABLE usuario (
	       usuario_id     SERIAL PRIMARY KEY,
	       sector_id     integer REFERENCES sector,
	       nombre        varchar(40),
	       apellido        varchar(40),
	       passwordUser varchar(250) not null,
	       mailUser varchar(250) not null,
	       authkeyUser varchar(250) ,
	       activUser integer DEFAULT 0
	       --avatar        varchar(120)

	);



	CREATE TABLE instituto (
	       instituto_id     SERIAL PRIMARY KEY,
	       nombre       varchar(40)
	);

	CREATE TABLE carrera (
	       carrera_id    SERIAL PRIMARY KEY,
	       instituto_id  integer REFERENCES instituto,
	       descripcion   varchar(40)
	);

	CREATE TABLE usuariocarrera (
	       usuario_id     integer REFERENCES usuario,
	       carrera_id     integer REFERENCES carrera
	);

	CREATE TABLE ano (
	       ano_id    SERIAL PRIMARY KEY,
	       ano       integer
	);

	CREATE TABLE planestudio (
	       planestudio_id    SERIAL PRIMARY KEY,
	       carrera_id  integer REFERENCES carrera,
	       ano_id  integer REFERENCES ano
	);

	CREATE TABLE materia (
	       materia_id    SERIAL PRIMARY KEY,
	       nombre        varchar(40),
	       optativa      boolean
	);

	CREATE TABLE planmateria (
	       planmateria_id    SERIAL PRIMARY KEY,
	       planestudio_id  integer REFERENCES planestudio,
	       materia_id  integer REFERENCES materia
	);

	CREATE TABLE programa (
	       programa_id  SERIAL PRIMARY KEY,
	       planmateria_id  integer REFERENCES planmateria,
	       ano_id  integer REFERENCES ano
	);

	CREATE TABLE estado (
	       estado_id     SERIAL PRIMARY KEY,
	       descripcion   varchar(40)
	);

	CREATE TABLE archivoprograma (
		   archivoprograma_id SERIAL PRIMARY KEY,
	       programa_id   integer REFERENCES programa,
	       usuario_id    integer REFERENCES usuario,
	       estado_id     integer REFERENCES estado,
	       archivo       bytea
	);

COMMIT;
