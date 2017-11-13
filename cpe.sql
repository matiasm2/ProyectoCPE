CREATE DATABASE cpe_db 
-- ~ WITH ENCODING 'LATIN1'
;
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
	
	ALTER DATABASE cpe_db OWNER TO cpedba;
	ALTER ROLE cpedba WITH CREATEDB SUPERUSER;
	
	\c cpe_db cpedba;

	ALTER ROLE cpewebuser WITH NOSUPERUSER NOCREATEDB;
	GRANT USAGE ON SCHEMA public TO cpewebuser;
	
	GRANT CONNECT ON DATABASE cpe_db TO cpewebuser;
	GRANT SELECT, INSERT, UPDATE ON ALL TABLES IN SCHEMA public TO cpewebuser;
	GRANT CONNECT ON DATABASE cpe_db TO cpedba;
	GRANT SELECT, INSERT, UPDATE ON ALL TABLES IN SCHEMA public TO cpedba;


	CREATE TABLE public.sector (
	       sector_id    SERIAL PRIMARY KEY,
	       descripcion   varchar(60),
	       shortname	varchar(10)
	);
	GRANT SELECT, INSERT, UPDATE ON public.sector TO cpewebuser;
	GRANT SELECT, USAGE, UPDATE ON SEQUENCE sector_sector_id_seq TO cpewebuser;


	CREATE TABLE public.usuario (
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
	GRANT SELECT, INSERT, UPDATE  ON public.usuario TO cpewebuser;
	GRANT SELECT, USAGE, UPDATE ON SEQUENCE usuario_usuario_id_seq TO cpewebuser;



	CREATE TABLE public.instituto (
	       instituto_id     SERIAL PRIMARY KEY,
	       nombre       varchar(50)
	);
	GRANT SELECT, INSERT, UPDATE  ON public.instituto TO cpewebuser;
	GRANT SELECT, USAGE, UPDATE ON SEQUENCE instituto_instituto_id_seq TO cpewebuser;


	CREATE TABLE public.carrera (
	       carrera_id    SERIAL PRIMARY KEY,
	       instituto_id  integer REFERENCES instituto,
	       descripcion   varchar(75)
	);
	GRANT SELECT, INSERT, UPDATE  ON public.carrera TO cpewebuser;
	GRANT SELECT, USAGE, UPDATE ON SEQUENCE carrera_carrera_id_seq TO cpewebuser;


	CREATE TABLE public.usuariocarrera (
	       usuario_id     integer REFERENCES usuario,
	       carrera_id     integer REFERENCES carrera
	);
	GRANT SELECT, INSERT, UPDATE  ON public.usuariocarrera TO cpewebuser;
	-- ~ GRANT SELECT, USAGE, UPDATE ON SEQUENCE usuariocarrera_usuariocarrera_id_seq TO cpewebuser;


	CREATE TABLE public.ano (
	       ano_id    SERIAL PRIMARY KEY,
	       ano       integer
	);
	GRANT SELECT, INSERT, UPDATE, DELETE  ON public.ano TO cpewebuser;
	GRANT SELECT, USAGE, UPDATE ON SEQUENCE ano_ano_id_seq TO cpewebuser;


	CREATE TABLE public.planestudio (
	       planestudio_id    SERIAL PRIMARY KEY,
	       carrera_id  integer REFERENCES carrera,
	       ano_id  integer REFERENCES ano
	);
	GRANT SELECT, INSERT, UPDATE, DELETE  ON public.planestudio TO cpewebuser;
	GRANT SELECT, USAGE, UPDATE ON SEQUENCE planestudio_planestudio_id_seq TO cpewebuser;


	CREATE TABLE public.materia (
	       materia_id    SERIAL PRIMARY KEY,
	       nombre        varchar(40),
	       optativa      boolean
	);
	GRANT SELECT, INSERT, UPDATE ,DELETE  ON public.materia TO cpewebuser;
	GRANT SELECT, USAGE, UPDATE ON SEQUENCE materia_materia_id_seq TO cpewebuser;


	CREATE TABLE public.planmateria (
	       planmateria_id    SERIAL PRIMARY KEY,
	       planestudio_id  integer REFERENCES planestudio,
	       materia_id  integer REFERENCES materia
	);
	GRANT SELECT, INSERT, UPDATE, DELETE  ON public.planmateria TO cpewebuser;
	GRANT SELECT, USAGE, UPDATE ON SEQUENCE planmateria_planmateria_id_seq TO cpewebuser;


	CREATE TABLE public.programa (
		programa_id  SERIAL PRIMARY KEY,
		planmateria_id  integer REFERENCES planmateria,
		ano_id  integer REFERENCES ano,
		fecha date,
	    descripcion   varchar(75)
	);
	GRANT SELECT, INSERT, UPDATE, DELETE  ON public.programa TO cpewebuser;
	GRANT SELECT, USAGE, UPDATE ON SEQUENCE programa_programa_id_seq TO cpewebuser;


	CREATE TABLE public.estado (
	       estado_id     SERIAL PRIMARY KEY,
	       descripcion   varchar(40)
	);
	GRANT SELECT, INSERT, UPDATE  ON public.estado TO cpewebuser;
	GRANT SELECT, USAGE, UPDATE ON SEQUENCE estado_estado_id_seq TO cpewebuser;


	CREATE TABLE public.archivoprograma (
		archivoprograma_id SERIAL PRIMARY KEY,
		programa_id   integer REFERENCES programa,
		usuario_id    integer REFERENCES usuario,
		estado_id     integer REFERENCES estado,
		archivo       varchar(100) not null,
		fecha date
	);
	GRANT SELECT, INSERT, UPDATE, DELETE  ON public.archivoprograma TO cpewebuser;
	GRANT SELECT, USAGE, UPDATE ON SEQUENCE archivoprograma_archivoprograma_id_seq TO cpewebuser;

---
-- Acciones registradas de todo el circuito administrativo (tabla fija)
-- El objetivo de esta tabla es poder completar la tabla asignsector que hace funcionar al 
-- comando app\commands\RoleAccessChecker
	CREATE TABLE public.actionrole (
		actionrole_id SERIAL PRIMARY KEY,
		action_disp       varchar(100) not null,
	    descripcion   varchar(40)
	);
	GRANT SELECT, INSERT, UPDATE  ON public.actionrole TO cpewebuser;
	GRANT SELECT, USAGE, UPDATE ON SEQUENCE actionrole_actionrole_id_seq TO cpewebuser;
---
-- Acciones registradas de todo el circuito administrativo (tabla fija)
-- El objetivo de esta tabla es poder completar la tabla asignsector que hace funcionar al 
-- comando app\commands\RoaleAccessChecker
	CREATE TABLE public.asignsector (
		asignsector_id SERIAL PRIMARY KEY,
		actionrole_id  integer REFERENCES actionrole,
	    sector_id   integer REFERENCES sector,
	    UNIQUE(actionrole_id,sector_id)
	);
	GRANT SELECT, INSERT, UPDATE, DELETE  ON public.asignsector TO cpewebuser;
	GRANT SELECT, USAGE, UPDATE ON SEQUENCE asignsector_asignsector_id_seq TO cpewebuser;

COMMIT;
