\c cpe_db;
BEGIN;
  --Datos que deben quedar
  INSERT INTO sector(descripcion,shortname)VALUES('Administrador del sistema CPE','Admin CPE');
  INSERT INTO sector(descripcion,shortname)VALUES('Usuario del sistema CPE','Usr CPE');
  INSERT INTO sector(descripcion,shortname)VALUES('Usuario del Instituto de Estudios Iniciales','Usr IEI');
  INSERT INTO sector(descripcion,shortname)VALUES('Usuario del Instituto de Ciencias de la Salud','Usr ICS');
  INSERT INTO sector(descripcion,shortname)VALUES('Usuario del Instituto de Ciencias Sociales y Administración','Usr ICSyA');
  INSERT INTO sector(descripcion,shortname)VALUES('Usuario del Instituto de Ingeniería y Agronomía','Usr IIyA');
  INSERT INTO sector(descripcion,shortname)VALUES('Usuario de Prensa','Usr Pr');

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
  INSERT INTO programa VALUES (10, 1, 20, '2017-11-07', 'Programa de la materia ZZ');

---
-- Acciones registradas de todo el circuito administrativo (tabla fija), sera parte del modelo proporcionando descripciones.
-- El objetivo de esta tabla es poder completar la tabla actionrole que hace funcionar al 
-- comando app\commands\RoleAccessChecker a travez de la tabla asignsector que depende de esta
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (1,'error/error','Ver pantalla bloqueada');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (2,'site/register','Registrar nuevos usuarios');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (3,'archivoprograma/delete','Eliminar documentos');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (4,'archivoprograma/index','Ver lista de documentos');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (5,'archivoprograma/update','Actualizar documentos');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (6,'archivoprograma/create','Crear documentos');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (7,'archivoprograma/view','Ver documentos');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (8,'estado/delete','Eliminar estados');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (9,'estado/index','Ver lista de estados de documentos');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (10,'estado/update','Actualizar estados de documentos');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (11,'estado/create','Crear tipos de estados de documentos');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (12,'estado/view','Ver tipos de estados de documentos');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (13,'instituto/delete','Eliminar institutos');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (14,'instituto/index','Ver lista de institutos');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (15,'instituto/update','Actualizar institutos');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (16,'instituto/create','Crear nuevos institutos');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (17,'instituto/view','Ver institutos');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (18,'carrera/delete','Eliminar carreras');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (19,'carrera/index','Ver lista de carreras');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (20,'carrera/update','Actualizar carreras');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (21,'carrera/create','Crear carreras');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (22,'carrera/view','Ver carreras');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (23,'materia/delete','Eliminar materias');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (24,'materia/index','Ver lista de materias');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (25,'materia/update','Actualizar materias');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (26,'materia/create','Crear materias');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (27,'materia/view','Ver materias');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (28,'ano/delete','Eliminar anios');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (29,'ano/index','Ver lista de anios');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (30,'ano/update','Actualizar anios');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (31,'ano/create','Crear anios');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (32,'ano/view','Ver anios');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (33,'sector/delete','Eliminar sectores');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (34,'sector/index','Ver lista de sectores');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (35,'sector/update','Actualizar sectores');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (36,'sector/create','Crear sectores');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (37,'sector/view','Ver sectores');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (38,'asignsector/delete','Eliminar asignación de acciones');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (39,'asignsector/index','Ver lista de asignación de acciones');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (40,'asignsector/update','Actualizar asignación de acciones');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (41,'asignsector/create','Crear asignación de acciones');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (42,'asignsector/view','Ver asignación de acciones');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (43,'usuario/delete','Eliminar usuarios');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (44,'usuario/index','Ver lista de usuarios');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (45,'usuario/update','Actualizar usuarios');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (46,'usuario/create','Crear usuarios');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (47,'usuario/view','Ver usuarios');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (48,'planestudio/view','Ver plan de estudio de carreras');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (49,'planestudio/index','Ver lista de plan de estudio de carreras');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (50,'planestudio/update','Actualizar plan de estudio de carreras');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (51,'planestudio/create','Crear plan de estudio de carreras');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (52,'planestudio/delete','Eliminar plan de estudio de carreras');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (53,'planmateria/view','Ver plan de estudio de materias');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (54,'planmateria/index','Ver lista de plan de estudio de materias');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (55,'planmateria/update','Actualizar plan de estudio de materias');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (56,'planmateria/create','Crear plan de estudio de materias');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (57,'planmateria/delete','Eliminar plan de estudio de materias');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (58,'programa/view','Ver referencias de documentos');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (59,'programa/index','Ver lista de referencias de documentos');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (60,'programa/update','Actualizar referencia de documento');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (61,'programa/create','Crear referencia de documentos');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (62,'programa/delete','Eliminar referencia de documentos');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (63, 'site/indexAdmin', 'Home del administrador de CPE');
---
-- Acciones configurables para cada sector a travez del usuario Administrador del sistema CPE', Admin CPE., id1
-- El objetivo de esta tabla es poder completar la tabla actions_asignsector que hace funcionar al 
-- comando app\commands\RoleAccessChecker se insertan los valores para que Admin CPE tenga todos los accesos
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (1,1);--acceso a error/error
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (2,1);--acceso a site/register
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (38,1);--acceso a asignsector/delete
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (39,1);--acceso a asignsector/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (40,1);--acceso a asignsector/update
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (41,1);--acceso a asignsector/create
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (42,1);--acceso a asignsector/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (43,1);--acceso a usuario/delete
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (44,1);--acceso a usuario/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (45,1);--acceso a usuario/update
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (46,1);--acceso a usuario/create
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (47,1);--acceso a usuario/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (58,1);--acceso a programa/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (59,1);--acceso a programa/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (60,1);--acceso a programa/update
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (61,1);--acceso a programa/create
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (62,1);--acceso a programa/delete
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (63,1);--acceso a site/indexAdmin
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (17,1);--acceso a instituto/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (14,1);--acceso a instituto/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (15,1);--acceso a instituto/update
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (16,1);--acceso a instituto/create
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (13,1);--acceso a instituto/delete
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (22,1);--acceso a carrera/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (19,1);--acceso a carrera/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (20,1);--acceso a carrera/update
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (21,1);--acceso a carrera/create
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (18,1);--acceso a carrera/delete
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (27,1);--acceso a materia/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (24,1);--acceso a materia/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (25,1);--acceso a materia/update
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (26,1);--acceso a materia/create
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (23,1);--acceso a materia/delete
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (53,1);--acceso a planmateria/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (54,1);--acceso a planmateria/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (55,1);--acceso a planmateria/update
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (56,1);--acceso a planmateria/create
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (57,1);--acceso a planmateria/delete
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (48,1);--acceso a planestudio/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (49,1);--acceso a planestudio/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (50,1);--acceso a planestudio/update
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (51,1);--acceso a planestudio/create
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (52,1);--acceso a planestudio/delete	
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (32,1);--acceso a año/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (29,1);--acceso a año/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (30,1);--acceso a año/update
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (31,1);--acceso a año/create
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (28,1);--acceso a año/delete
---
-- Acciones configurables para: 'Usuario del sistema CPE','Usr CPE', id2
---
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (58,2);--acceso a programa/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (59,2);--acceso a programa/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (60,2);--acceso a programa/update
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (61,2);--acceso a programa/create
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (62,2);--acceso a programa/delete
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (7,2);--acceso a archivoprograma/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (4,2);--acceso a archivoprograma/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (5,2);--acceso a archivoprograma/update
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (6,2);--acceso a archivprograma/create
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (3,2);--acceso a archivoprograma/delete
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (17,2);--acceso a instituto/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (14,2);--acceso a instituto/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (22,2);--acceso a carrera/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (19,2);--acceso a carrera/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (53,2);--acceso a planmateria/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (54,2);--acceso a planmateria/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (48,2);--acceso a planestudio/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (49,2);--acceso a planestudio/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (27,2);--acceso a materia/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (24,2);--acceso a materia/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (25,2);--acceso a materia/update
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (26,2);--acceso a materia/create
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (23,2);--acceso a materia/delete

---
-- Acciones configurables para: 'Usuario del Instituto de Estudios Iniciales','Usr IEI', id3
---
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (58,3);--acceso a programa/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (59,3);--acceso a programa/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (7,3);--acceso a archivoprograma/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (4,3);--acceso a archivoprograma/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (5,3);--acceso a archivoprograma/update
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (6,3);--acceso a archivprograma/create
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (3,3);--acceso a archivoprograma/delete
---
-- Acciones configurables para: 'Usuario del Instituto de Ciencias de la Salud','Usr ICS',id4
---
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (58,4);--acceso a programa/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (59,4);--acceso a programa/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (7,4);--acceso a archivoprograma/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (4,4);--acceso a archivoprograma/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (5,4);--acceso a archivoprograma/update
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (6,4);--acceso a archivprograma/create
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (3,4);--acceso a archivoprograma/delete
---
-- Acciones configurables para: 'Usuario del Instituto de Ciencias Sociales y Administración','Usr ICSyA',id5
---
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (58,5);--acceso a programa/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (59,5);--acceso a programa/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (7,5);--acceso a archivoprograma/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (4,5);--acceso a archivoprograma/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (5,5);--acceso a archivoprograma/update
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (6,5);--acceso a archivprograma/create
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (3,5);--acceso a archivoprograma/delete
---
-- Acciones configurables para: 'Usuario del Instituto de Ingeniería y Agronomía','Usr IIyA'.,id6
---
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (58,6);--acceso a programa/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (59,6);--acceso a programa/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (7,6);--acceso a archivoprograma/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (4,6);--acceso a archivoprograma/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (5,6);--acceso a archivoprograma/update
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (6,6);--acceso a archivprograma/create
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (3,6);--acceso a archivoprograma/delete
---
-- Acciones configurables para: 'Usuario de Prensa','Usr Pr'
---
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (58,7);--acceso a programa/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (59,7);--acceso a programa/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (7,7);--acceso a archivoprograma/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (4,7);--acceso a archivoprograma/index

	END;



COMMIT;
