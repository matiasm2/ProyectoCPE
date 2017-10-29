\c cpe_db;
BEGIN;
  --Datos que deben quedar
  INSERT INTO sector(descripcion)VALUES ('CPE Admin');
  INSERT INTO sector(descripcion)VALUES ('Usuario de la CPE');
  INSERT INTO sector(descripcion)VALUES ('Usuario de instituto');
  INSERT INTO sector(descripcion)VALUES ('Usuario de Prensa');

  INSERT INTO instituto(nombre)
  VALUES ('Instituto de Estudios Iniciales');
  INSERT INTO instituto(nombre)
  VALUES ('Instituto de Ciencias de la Salud');
  INSERT INTO instituto(nombre)
  VALUES ('Instituto de Ciencias Sociales y Administración');
  INSERT INTO instituto(nombre)
  VALUES ('Instituto de Ingeniería y Agronomía');

  --Carreras del 'Instituto de Ciencias de la Salud'
  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ciencias de la Salud'),'Medicina');
  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ciencias de la Salud'),'Bioquímica');
  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ciencias de la Salud'),'Licenciatura en Enfermería');
  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ciencias de la Salud'),'Licenciatura en Organización y Asistencia de Quirófanos');
  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ciencias de la Salud'),'Licenciatura en Kinesiología y Fisiatría');
  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ciencias de la Salud'),'Tecnicatura en Emergencias Sanitarias y Desastres');
  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ciencias de la Salud'),'Tecnicatura Universitaria en Farmacia Hospitalaria');
  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ciencias de la Salud'),'Tecnicatura Universitaria en Información Clínica y Gestión de Pacientes');

  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ciencias de la Salud'),'Especialización en Cardiología');
  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ciencias de la Salud'),'Maestría en Investigación Traslacional para la Salud');

  --Carreras del 'Instituto de Ciencias Sociales y Administración'
  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ciencias Sociales y Administración'),'Licenciatura en Economía');
  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ciencias Sociales y Administración'),'Licenciatura en Trabajo Social');
  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ciencias Sociales y Administración'),'Licenciatura en Administración');
  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ciencias Sociales y Administración'),'Licenciatura en Gestión Ambiental');
  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ciencias Sociales y Administración'),'Licenciatura en Relaciones del Trabajo');

  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ciencias Sociales y Administración'),'Especialización en Evaluación de Políticas Públicas');

  --Carreras del 'Instituto de Ingeniería y Agronomía'
  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ingeniería y Agronomía'),'Ingeniería en Petróleo');
  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ingeniería y Agronomía'),'Bioingeniería');
  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ingeniería y Agronomía'),'Ingeniería Electromecánica');
  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ingeniería y Agronomía'),'Ingeniería en Informática');
  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ingeniería y Agronomía'),'Ingeniería Industrial');
  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ingeniería y Agronomía'),'Tecnicatura Universitaria en Producción Vegetal Intensiva');
  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ingeniería y Agronomía'),'Tecnicatura Universitaria en Emprendimientos Agropecuarios');
  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ingeniería y Agronomía'),'Licenciatura en Administración Agraria');
  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ingeniería y Agronomía'),'Licenciatura en Ciencias Agrarias');
  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ingeniería y Agronomía'),'Ingeniería en Transporte');

  --Estados
  INSERT INTO estado(descripcion)
  VALUES ('Enviado');
  INSERT INTO estado(descripcion)
  VALUES ('En revisión');
  INSERT INTO estado(descripcion)
  VALUES ('A corregir');
  INSERT INTO estado(descripcion)
  VALUES ('Completo');
  INSERT INTO estado(descripcion)
  VALUES ('Firmado');

  INSERT INTO ano(ano)
  VALUES (1999);
  INSERT INTO ano(ano)
  VALUES (2000);
  INSERT INTO ano(ano)
  VALUES (2001);
  INSERT INTO ano(ano)
  VALUES (2002);
  INSERT INTO ano(ano)
  VALUES (2003);
  INSERT INTO ano(ano)
  VALUES (2004);
  INSERT INTO ano(ano)
  VALUES (2005);
  INSERT INTO ano(ano)
  VALUES (2006);
  INSERT INTO ano(ano)
  VALUES (2007);
  INSERT INTO ano(ano)
  VALUES (2008);
  INSERT INTO ano(ano)
  VALUES (2009);
  INSERT INTO ano(ano)
  VALUES (2010);
  INSERT INTO ano(ano)
  VALUES (2011);
  INSERT INTO ano(ano)
  VALUES (2012);
  INSERT INTO ano(ano)
  VALUES (2013);
  INSERT INTO ano(ano)
  VALUES (2014);
  INSERT INTO ano(ano)
  VALUES (2015);
  INSERT INTO ano(ano)
  VALUES (2016);
  INSERT INTO ano(ano)
  VALUES (2018);
  INSERT INTO ano(ano)
  VALUES (2017);
  INSERT INTO ano(ano)
  VALUES (2019);
  INSERT INTO ano(ano)
  VALUES (2020);
  INSERT INTO ano(ano)
  VALUES (2021);
  INSERT INTO ano(ano)
  VALUES (2022);
  INSERT INTO ano(ano)
  VALUES (2023);

  --Inserts de prueba
  INSERT INTO planestudio(carrera_id,ano_id)
  VALUES ((SELECT carrera_id FROM carrera WHERE descripcion='Ingeniería en Petróleo'),(SELECT ano_id FROM ano WHERE ano=2015));
  INSERT INTO planestudio(carrera_id,ano_id)
  VALUES ((SELECT carrera_id FROM carrera WHERE descripcion='Ingeniería en Informática'),(SELECT ano_id FROM ano WHERE ano=2015));

  INSERT INTO materia(nombre,optativa)
  VALUES ('Matemática I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Matemática II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Matemática III', FALSE);

  INSERT INTO planmateria(planestudio_id,materia_id)
  VALUES (
    (SELECT planestudio_id FROM planestudio
      WHERE carrera_id=(SELECT carrera_id FROM carrera WHERE descripcion='Ingeniería en Informática')
      AND ano_id=(SELECT ano_id FROM ano WHERE ano=2015)),
    (SELECT materia_id FROM materia WHERE nombre='Matemática I'));
  INSERT INTO planmateria(planestudio_id,materia_id)
  VALUES (
    (SELECT planestudio_id FROM planestudio
      WHERE carrera_id=(SELECT carrera_id FROM carrera WHERE descripcion='Ingeniería en Informática')
      AND ano_id=(SELECT ano_id FROM ano WHERE ano=2015)),
    (SELECT materia_id FROM materia WHERE nombre='Matemática II'));
  INSERT INTO planmateria(planestudio_id,materia_id)
  VALUES (
    (SELECT planestudio_id FROM planestudio
      WHERE carrera_id=(SELECT carrera_id FROM carrera WHERE descripcion='Ingeniería en Informática')
      AND ano_id=(SELECT ano_id FROM ano WHERE ano=2015)),
    (SELECT materia_id FROM materia WHERE nombre='Matemática III'));

  INSERT INTO programa(planmateria_id,ano_id,fecha,descripcion)
  VALUES (1,14,(SELECT CURRENT_DATE),'Programa de la materia XX');
	
  INSERT INTO programa(planmateria_id,ano_id,fecha,descripcion)
  VALUES (2,14,(SELECT CURRENT_DATE),'Programa de la materia YY');
	
  INSERT INTO programa(planmateria_id,ano_id,fecha,descripcion)
  VALUES (3,14,(SELECT CURRENT_DATE),'Programa de la materia ZZ');
	
  INSERT INTO programa(planmateria_id,ano_id,fecha,descripcion)
  VALUES (1,15,(SELECT CURRENT_DATE),'Programa de la materia XX');
	
  INSERT INTO programa(planmateria_id,ano_id,fecha,descripcion)
  VALUES (2,15,(SELECT CURRENT_DATE),'Programa de la materia YY');
	
  INSERT INTO programa(planmateria_id,ano_id,fecha,descripcion)
  VALUES (3,15,(SELECT CURRENT_DATE),'Programa de la materia ZZ');
	
  INSERT INTO programa(planmateria_id,ano_id,fecha,descripcion)
  VALUES (1,16,(SELECT CURRENT_DATE),'Programa de la materia XX');
	
  INSERT INTO programa(planmateria_id,ano_id,fecha,descripcion)
  VALUES (2,16,(SELECT CURRENT_DATE),'Programa de la materia YY');
	
  INSERT INTO programa(planmateria_id,ano_id,fecha,descripcion)
  VALUES (3,16,(SELECT CURRENT_DATE),'Programa de la materia ZZ');
---
-- Acciones registradas de todo el circuito administrativo (tabla fija), sera parte del modelo proporcionando descripciones.
-- El objetivo de esta tabla es poder completar la tabla actionrole que hace funcionar al 
-- comando app\commands\RoleAccessChecker a travez de la tabla asignsector que depende de esta
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (1,'error/error','muestra error');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (2,'site/register','crea usuario');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (3,'archivoprograma/delete','borra documento');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (4,'archivoprograma/index','lista documento');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (5,'archivoprograma/update','actualiza documento');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (6,'archivoprograma/create','nuevo documento');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (7,'archivoprograma/view','muestra documento');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (8,'estado/delete','borra estado');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (9,'estado/index','lista estados de documentos');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (10,'estado/update','actualiza estado de documento');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (11,'estado/create','nuevo tipo de estado dedocumentos');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (12,'estado/view','muestra tipo de estado dedocumentos');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (13,'instituto/delete','borra instituto');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (14,'instituto/index','lista institutos');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (15,'instituto/update','actualiza instituto');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (16,'instituto/create','nuevo instituto');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (17,'instituto/view','muestra instituto');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (18,'carrera/delete','borra carrera');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (19,'carrera/index','lista carreras');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (20,'carrera/update','actualiza carrera');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (21,'carrera/create','nueva carrera');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (22,'carrera/view','muestra carrera');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (23,'materia/delete','borra materia');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (24,'materia/index','lista materias');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (25,'materia/update','actualiza materia');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (26,'materia/create','nueva materia');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (27,'materia/view','muestra materia');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (28,'ano/delete','borra anio');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (29,'ano/index','lista anios');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (30,'ano/update','actualiza anio');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (31,'ano/create','nuevo anio');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (32,'ano/view','muestra anio');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (33,'sector/delete','borra sector');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (34,'sector/index','lista sectores');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (35,'sector/update','actualiza sector');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (36,'sector/create','nuevo sector');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (37,'sector/view','muestra sector');
---
-- Acciones configurables para cada sector a travez del usuario CPE Admin.
-- El objetivo de esta tabla es poder completar la tabla actions_asignsector que hace funcionar al 
-- comando app\commands\RoleAccessChecker
	INSERT INTO asignsector(asignsector_id,actionrole_id,sector_id)VALUES (1,1,1);
	END;



COMMIT;
