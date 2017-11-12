\c cpe_db;
BEGIN;
  --Datos que deben quedar
  INSERT INTO sector(descripcion,shortname)VALUES('Administrador del sistema CPE','Admin CPE');
  INSERT INTO sector(descripcion,shortname)VALUES('Usuario del sistema CPE','Usr CPE');
  INSERT INTO sector(descripcion,shortname)VALUES('Usuario del Instituto de Estudios Iniciales','Usr IEI');
  INSERT INTO sector(descripcion,shortname)VALUES('Usuario del Instituto de Ciencias de la Salud','Usr ICS');
  INSERT INTO sector(descripcion,shortname)VALUES('Usuario del Instituto de Ciencias Sociales y Administraci�n','Usr ICSyA');
  INSERT INTO sector(descripcion,shortname)VALUES('Usuario del Instituto de Ingenier�a y Agronom�a','Usr IIyA');
  INSERT INTO sector(descripcion,shortname)VALUES('Usuario de Prensa','Usr Pr');

  INSERT INTO instituto(nombre)
  VALUES ('Instituto de Estudios Iniciales');
  INSERT INTO instituto(nombre)
  VALUES ('Instituto de Ciencias de la Salud');
  INSERT INTO instituto(nombre)
  VALUES ('Instituto de Ciencias Sociales y Administraci�n');
  INSERT INTO instituto(nombre)
  VALUES ('Instituto de Ingenier�a y Agronom�a');

  --Carreras del 'Instituto de Ciencias de la Salud'
  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ciencias de la Salud'),'Medicina');
  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ciencias de la Salud'),'Bioqu�mica');
  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ciencias de la Salud'),'Licenciatura en Enfermer�a');
  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ciencias de la Salud'),'Licenciatura en Organizaci�n y Asistencia de Quir�fanos');
  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ciencias de la Salud'),'Licenciatura en Kinesiolog�a y Fisiatr�a');
  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ciencias de la Salud'),'Tecnicatura en Emergencias Sanitarias y Desastres');
  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ciencias de la Salud'),'Tecnicatura Universitaria en Farmacia Hospitalaria');
  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ciencias de la Salud'),'Tecnicatura Universitaria en Informaci�n Cl�nica y Gesti�n de Pacientes');

  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ciencias de la Salud'),'Especializaci�n en Cardiolog�a');
  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ciencias de la Salud'),'Maestr�a en Investigaci�n Traslacional para la Salud');

  --Carreras del 'Instituto de Ciencias Sociales y Administraci�n'
  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ciencias Sociales y Administraci�n'),'Licenciatura en Econom�a');
  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ciencias Sociales y Administraci�n'),'Licenciatura en Trabajo Social');
  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ciencias Sociales y Administraci�n'),'Licenciatura en Administraci�n');
  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ciencias Sociales y Administraci�n'),'Licenciatura en Gesti�n Ambiental');
  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ciencias Sociales y Administraci�n'),'Licenciatura en Relaciones del Trabajo');

  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ciencias Sociales y Administraci�n'),'Especializaci�n en Evaluaci�n de Pol�ticas P�blicas');

  --Carreras del 'Instituto de Ingenier�a y Agronom�a'
  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ingenier�a y Agronom�a'),'Ingenier�a en Petr�leo');
  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ingenier�a y Agronom�a'),'Bioingenier�a');
  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ingenier�a y Agronom�a'),'Ingenier�a Electromec�nica');
  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ingenier�a y Agronom�a'),'Ingenier�a en Inform�tica');
  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ingenier�a y Agronom�a'),'Ingenier�a Industrial');
  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ingenier�a y Agronom�a'),'Tecnicatura Universitaria en Producci�n Vegetal Intensiva');
  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ingenier�a y Agronom�a'),'Tecnicatura Universitaria en Emprendimientos Agropecuarios');
  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ingenier�a y Agronom�a'),'Licenciatura en Administraci�n Agraria');
  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ingenier�a y Agronom�a'),'Licenciatura en Ciencias Agrarias');
  INSERT INTO carrera(instituto_id, descripcion)
  VALUES ((SELECT instituto_id FROM instituto WHERE nombre='Instituto de Ingenier�a y Agronom�a'),'Ingenier�a en Transporte');

  --Estados
  INSERT INTO estado(descripcion)
  VALUES ('Enviado');
  INSERT INTO estado(descripcion)
  VALUES ('En revisi�n');
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
  VALUES ((SELECT carrera_id FROM carrera WHERE descripcion='Ingenier�a en Petr�leo'),(SELECT ano_id FROM ano WHERE ano=2015));
  INSERT INTO planestudio(carrera_id,ano_id)
  VALUES ((SELECT carrera_id FROM carrera WHERE descripcion='Ingenier�a en Inform�tica'),(SELECT ano_id FROM ano WHERE ano=2015));

  INSERT INTO materia(nombre,optativa)
  VALUES ('Matem�tica I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Matem�tica II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Matem�tica III', FALSE);

  INSERT INTO planmateria(planestudio_id,materia_id)
  VALUES (
    (SELECT planestudio_id FROM planestudio
      WHERE carrera_id=(SELECT carrera_id FROM carrera WHERE descripcion='Ingenier�a en Inform�tica')
      AND ano_id=(SELECT ano_id FROM ano WHERE ano=2015)),
    (SELECT materia_id FROM materia WHERE nombre='Matem�tica I'));
  INSERT INTO planmateria(planestudio_id,materia_id)
  VALUES (
    (SELECT planestudio_id FROM planestudio
      WHERE carrera_id=(SELECT carrera_id FROM carrera WHERE descripcion='Ingenier�a en Inform�tica')
      AND ano_id=(SELECT ano_id FROM ano WHERE ano=2015)),
    (SELECT materia_id FROM materia WHERE nombre='Matem�tica II'));
  INSERT INTO planmateria(planestudio_id,materia_id)
  VALUES (
    (SELECT planestudio_id FROM planestudio
      WHERE carrera_id=(SELECT carrera_id FROM carrera WHERE descripcion='Ingenier�a en Inform�tica')
      AND ano_id=(SELECT ano_id FROM ano WHERE ano=2015)),
    (SELECT materia_id FROM materia WHERE nombre='Matem�tica III'));

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
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (38,'asignsector/delete','Eliminar asignaci�n de acciones');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (39,'asignsector/index','Ver lista de asignaci�n de acciones');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (40,'asignsector/update','Actualizar asignaci�n de acciones');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (41,'asignsector/create','Crear asignaci�n de acciones');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (42,'asignsector/view','Ver asignaci�n de acciones');
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
-- Acciones configurables para cada sector a travez del usuario CPE Admin.
-- El objetivo de esta tabla es poder completar la tabla actions_asignsector que hace funcionar al 
-- comando app\commands\RoleAccessChecker se insertan los valores para que CPE Admin tenga todos los accesos
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
	END;



COMMIT;