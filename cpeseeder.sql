\c cpe_db;
BEGIN;
  --Datos que deben quedar
  --salud
  INSERT INTO sector(descripcion,shortname)VALUES('Administrador del sistema CPE','Admin CPE');--1
  INSERT INTO sector(descripcion,shortname)VALUES('Usuario del sistema CPE','Usr CPE');--2
  --prensa
  INSERT INTO sector(descripcion,shortname)VALUES('Usuario de Prensa','Usr Pr');--3
  --institutos
  INSERT INTO sector(descripcion,shortname)VALUES('Usuario del Instituto de Estudios Iniciales','Usr IEI');--4
  INSERT INTO sector(descripcion,shortname)
  VALUES('Usuario del Instituto de Ciencias de la Salud - Licenciatura en Kinesiología y Fisiatría','ICS/Kin');--5
  INSERT INTO sector(descripcion,shortname)VALUES('Usuario del Instituto de Ciencias de la Salud - Medicina','ICS/Medicina');--6
  INSERT INTO sector(descripcion,shortname)VALUES('Usuario del Instituto de Ciencias de la Salud - Bioquímica','ICS/Bioquímica');--7
  INSERT INTO sector(descripcion,shortname)VALUES('Usuario del Instituto de Ciencias de la Salud - Licenciatura en Enfermería','ICS/Enfermería');--8
  INSERT INTO sector(descripcion,shortname)
  VALUES('Usuario del Instituto de Ciencias de la Salud - Licenciatura en Organización y Asistencia de Quirófanos','ICS/Org.As.Quir');--9
  INSERT INTO sector(descripcion,shortname)
  VALUES('Usuario del Instituto de Ciencias de la Salud - Tecnicatura en Emergencias Sanitarias y Desastres','ICS/E.Sanit.Des');--10
  INSERT INTO sector(descripcion,shortname)
  VALUES('Usuario del Instituto de Ciencias de la Salud - Tecnicatura Universitaria en Farmacia Hospitalaria','ICS/Farm.Hospit');--11
  INSERT INTO sector(descripcion,shortname)VALUES('Usuario del Instituto de Ciencias de la Salud - Especialización en Cardiología','ICS/Esp.Cardio');--12
  INSERT INTO sector(descripcion,shortname)
  VALUES('Usuario del Instituto de Ciencias de la Salud - Maestría en Investigación Traslacional para la Salud','ICS/M.I.Tras.Sd');--13
  --administracion
  INSERT INTO sector(descripcion,shortname)
  VALUES('Usuario del Instituto de Cs. Sociales y Administración - Licenciatura en Administración','ICSyA/Administ');--14
  INSERT INTO sector(descripcion,shortname)
  VALUES('Usuario del Instituto de Cs. Sociales y Administración - Licenciatura en Economía','ICSyA/Economía');--15
  INSERT INTO sector(descripcion,shortname)
  VALUES('Usuario del Instituto de Cs. Sociales y Administración - Licenciatura en Trabajo Social','ICSyA/Tr.Social');--16
  INSERT INTO sector(descripcion,shortname)
  VALUES('Usuario del Instituto de Cs. Sociales y Administración - Licenciatura en Gestión Ambiental','ICSyA/G.Ambient');--17
  INSERT INTO sector(descripcion,shortname)
  VALUES('Usuario del Instituto de Cs. Sociales y Administración - Licenciatura en Relaciones del Trabajo','ICSyA/R.Trabajo');--18
  INSERT INTO sector(descripcion,shortname)
  VALUES('Usuario del Instituto de Cs. Sociales y Administración - Especialización en Evaluación de Políticas Públicas','ICSyA/Ev.P.Públ');--19
  --ingenieria y agronomia
  INSERT INTO sector(descripcion,shortname)VALUES('Usuario del Instituto de Ingeniería y Agronomía - Ingeniería en Informática','IIyA/Informát'); --20
  INSERT INTO sector(descripcion,shortname)VALUES('Usuario del Instituto de Ingeniería y Agronomía - Ingeniería en Petróleo','IIyA/Petróleo');--21
  INSERT INTO sector(descripcion,shortname)VALUES('Usuario del Instituto de Ingeniería y Agronomía - Bioingeniería','IIyA/Bioingnria');--22
  INSERT INTO sector(descripcion,shortname)
  VALUES('Usuario del Instituto de Ingeniería y Agronomía - Ingeniería Electromecánica','IIyA/Electromec');--23
  INSERT INTO sector(descripcion,shortname)VALUES('Usuario del Instituto de Ingeniería y Agronomía - Ingeniería Industrial','IIyA/Industrial');--24
  INSERT INTO sector(descripcion,shortname)
  VALUES('Usuario del Instituto de Ingeniería y Agronomía - Tecnicatura Universitaria en Producción Vegetal Intensiva','IIyA/ProdVegInt');--25
  INSERT INTO sector(descripcion,shortname)
  VALUES('Usuario del Instituto de Ingeniería y Agronomía - Tecnicatura Universitaria en Emprendimientos Agropecuarios','IIyA/EmprAgrope');--26
  INSERT INTO sector(descripcion,shortname)
  VALUES('Usuario del Instituto de Ingeniería y Agronomía - Licenciatura en Administración Agraria','IIyA/AdmAgraria');--27
  INSERT INTO sector(descripcion,shortname)
  VALUES('Usuario del Instituto de Ingeniería y Agronomía - Licenciatura en Ciencias Agrarias','IIyA/CsAgrarias');--28
  INSERT INTO sector(descripcion,shortname)VALUES('Usuario del Instituto de Ingeniería y Agronomía - Ingeniería en Transporte','IIyA/Transporte');--29

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

  INSERT INTO ano(ano)VALUES (1999);--1
  INSERT INTO ano(ano)VALUES (2000);--2
  INSERT INTO ano(ano)VALUES (2001);--3
  INSERT INTO ano(ano)VALUES (2002);--4
  INSERT INTO ano(ano)VALUES (2003);--5
  INSERT INTO ano(ano)VALUES (2004);--6
  INSERT INTO ano(ano)VALUES (2005);--7
  INSERT INTO ano(ano)VALUES (2006);--8
  INSERT INTO ano(ano)VALUES (2007);--9
  INSERT INTO ano(ano)VALUES (2008);--10
  INSERT INTO ano(ano)VALUES (2009);--11
  INSERT INTO ano(ano)VALUES (2010);--12
  INSERT INTO ano(ano)VALUES (2011);--13
  INSERT INTO ano(ano)VALUES (2012);--14
  INSERT INTO ano(ano)VALUES (2013);--15
  INSERT INTO ano(ano)VALUES (2014);--16
  INSERT INTO ano(ano)VALUES (2015);--17
  INSERT INTO ano(ano)VALUES (2016);--18
  INSERT INTO ano(ano)VALUES (2018);--19
  INSERT INTO ano(ano)VALUES (2017);--20
  INSERT INTO ano(ano)VALUES (2019);--21
  INSERT INTO ano(ano)VALUES (2020);--22
  INSERT INTO ano(ano)VALUES (2021);--23
  INSERT INTO ano(ano)VALUES (2022);--24
  INSERT INTO ano(ano)VALUES (2023);--25

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
  INSERT INTO materia(nombre,optativa)
  VALUES ('Matemática IV', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Matemática CPU', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Matemática para Economistas', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Matemática Financiera', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Matemática Aplicada', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Análisis Matemático I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Análisis Matemático II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Física I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Física II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Física III', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Química General', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Taller de lectura y escritura', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Prácticas culturales', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Taller de vida universitaria CPU', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Lengua CPU', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Problemas de la historia Argentina', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Taller de ingeniería', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Sistemas de representación', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Fundamentos de informática', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Ingeniera ambiental', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Gestión de la calidad', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Practica Profesional Supervisada', FALSE);
  
--Materias de Inst. Petro
	INSERT INTO materia(nombre,optativa)
  VALUES ('Geologia', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Quimica organica', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Geologia del petroleo', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Seguridad e higiene laboral', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Termodinamica A', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Termodinamica B', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Quimica del petroleo y gas', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Estatica y resistencia de materiales I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Electrotecnia y maquinas electricas', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Ingles aplicado a la ingenieria I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Ingles aplicado a la ingenieria II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Mecanica de los fluidos', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Perforacion I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Geofisica', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Reservorios I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Gestiona ambiental', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Produccion de petroleo I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Perfilaje de pozos', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Maquinas termicas', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Perforacion II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Electronica', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Organizacion industrial', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Reservorios II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Automatizacion y control', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Gestion economica y legal del petroleo', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Produccion de petroleo II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Evaluacion y estimulacion de formaciones', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Proyecto de instalaciones de superficie', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Desarrollo de yacimientos', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Reservorios III', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Industrializacion del petroleo', FALSE); --optativas Ingenieria en petroleo
  INSERT INTO materia(nombre,optativa)
  VALUES ('Geoquimica', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Geomecanica', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Petrofisica', FALSE);

  INSERT INTO materia(nombre,optativa) --Tecnicatura universitaria en farmacia hospitalaria
  VALUES ('Física y química para ciencias de la salud', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Anatomía y fisiología humana I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Anatomía y fisiología humana II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Introducción a la farmacia hospitalaria', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Farmacotecnica I: formas farmaceuticas no esteriles', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Farmacia hospitalaria I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Farmacia hospitalaria II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Informatica aplicada a ciencias de la salud', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Fundamentos de famacologia I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Productos médicos I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Productos médicos II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Famacopolitica', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Prácticas profesionales I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Prácticas profesionales II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Prácticas profesionales III', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Prácticas profesionales IV', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Introducción a la Gestión de la Calidad ', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Farmacotecnica II: formas farmaceuticas esteriles', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Ingles aplicado a ciencias de la salud', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Fundamentos de famacologia II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Productos medicos II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Metodología de la investigación científica', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Informatica', FALSE);

  INSERT INTO materia(nombre,optativa)--Medicina
  VALUES ('Conocimiento y ciencias de la salud', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Biologia para ciencias de la salud', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Salud pública', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Estructura y movimiento', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Nutricion y regulacion', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Articulacion comunitaria', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Salud y sociedad', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Transporte e intercambio', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Ser humano y entorno', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Genero, sexualidad y reproduccion', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Articulacion comunitaria II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Bioetica', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Agresion Infectologica-inmunitaria', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Toxico-farmacologia', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Condiciones de vidad. Autoagresion y estres', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Epidemologia', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Organizacion de servicios de salud', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Salud mental', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Articulacion comunitaria III', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Salud y enfermedad en la infancia y adolescencia I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Salud y enfermedad en la mujer', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Salud y enfermedad en el adulto I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Gerontologia', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Medicina legal', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Emergentologia', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Salud del trabajo, ocio y la recreacion', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Cuidados paliativos', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Medicina familiar  y comunitaria', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Salud y enfermedad en la infancia y adolescencia II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Salud y enfermedad en el adulto II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Interconsulta y derivacion', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Primer nivel de atencion', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Atencion hospitalaria', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Atencion hospitalaria alta complejidad', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Emergencias', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Mercado de trabajo en salud', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Medicinas complementarias', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Comunicacion en salud', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Ecologia y salud', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Historia de la medicina', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Genero y salud', TRUE);

  INSERT INTO materia(nombre,optativa)--Bioquimica plan 2011
  VALUES ('Quimica I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Quimica II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Biologia general', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Anatomia e histologia', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Bioquimica I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Fisiologia', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Tecnicas analitas instrumentales I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Biologia celular y molecular', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Quimica analitica', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Bioestadistica', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Bioquimica II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Microbiología general', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Biofisicoquimica', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Bioquimica III', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Fisiopatologia', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Toxicologia y quimica legal', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Inmunologia', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Bioquimica clinica I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Elementos de farmacologia', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Microbiología clínica', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Hematologia', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Medio interno y laboratorio de emergencias', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Bromatologia', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Bioquimica clinica', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Parasitologia y mitologia clinica', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Bacteriologia clinica', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Virlogia clinica', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Hormonas: biosintesis, estructura y determinacion analitica', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Regulacion endocrina del metabolismo, crecimiento y reporduccion', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Inmunologia clinica', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Bioquimica patologica', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Trabajo final', TRUE);
  INSERT INTO materia(nombre,optativa)--plan de estudios 2015
  VALUES ('Tecnicas intrumentales analiticas II', FALSE);
  INSERT INTO materia(nombre,optativa)--Licenciaturia en enfermeria 2011
  VALUES ('Enfermeria en atencion primaria de salud', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Enfermeria en cuidados basicos', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Fisica y quimica biologica', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Enfermeria materno-infantil', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Nutricion', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Microbiología y parasitología', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Cuidados integrales al adulto y al anciano I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Metodologia de investigacion en enfermeria', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Cuidados Integrales al Adulto y Anciano II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Infectología Aplicada a Enfermería', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Informática Aplicada a Ciencias de la Salud', FALSE);
  INSERT INTO materia(nombre,optativa) VALUES ('Psicología', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Enfermería en Salud Mental y Psiquiatría', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Enfermería Materno Infantil II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Organización de Servicios de Salud', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Organización de Servicios de Salud II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Práctica Integradora I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Cuidados Integrales al Paciente Crítico I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Gestión y Administración en Enfermería', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Comunicación en Salud', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Educación en Salud', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Investigación en Enfermería', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Cuidados Integrales alPaciente Crítico II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Tesina', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Taller de Tesina I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Taller de Tesina II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Taller Elaboración de Tesina', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Legislación en Salud', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Emergencias y Catástrofes', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Práctica Integradora II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Fundamentos de Atención e Instrumentación Quirúrgica', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Bioseguridad', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Fundamentos éticos y de Medicina Legal', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Microbiología', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Farmacología', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Anestesiología', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Anatomía Quirúrgica 1', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Anatomía Quirúrgica 2', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Cirugía General', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Procedimientos Quirúrgicos 1(plástica, urológica,tocoginecológica)', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Procedimientos Quirúrgicos 2 (torácica, vascular periférica ycardíaca)', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES('Procedimientos Quirúrgicos 3(traumatológica,otorrinolaringológica,neurocirugía, oftalmología,bucomaxilofacial,trasplantología)', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Cirugía pediátrica', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Didáctica de la Instrumentación Quirúrgica', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Quirúrgica Avanzada', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Informática aplicada a Ciencias de la Salud', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Inglés aplicado a Ciencias de la Salud I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Inglés Aplicado a Ciencias de la Salud II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Fundamentos Jurídicos Básicos', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Física y Química Aplicada', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Gestión en Salud', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Protección Ambiental', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Epidemiología', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Desarrollo Profesional', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Histología, Embriología y Genética', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Biofísica', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Anatomía', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Fisiología', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Bioética', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Kinefisiatría Legal y Deontología', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Kinefilaxia', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Biomecánica', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Semiopatología Clínica', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Técnicas Kinésicas I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Evaluaciones Kinefisiátricas', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Semiopatología Quirúrgica', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Agentes Físicos', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Práctica Kinésica I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Técnicas Kinésicas II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Ortesis y Prótesis', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Terapéutica Kinefisiátrica en Traumatología, Ortopedia y Reumatología', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Psicomotricidad y Neurodesarrollo', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Práctica Kinésica II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Terapéutica Kinefisiatrica en Pediatría', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Kinesiología y Fisioterapia en Neurología', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Terapéutica Kinefisiatrica Cardiorespiratoria', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Kinesiología y Fisioterapia Deportiva', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Kinefisiatría Estética', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Bioinformática y Rehabilitación Computacional', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Kinesiología y Fisioterapia Ocupacional y Laboral. Auditoría Kinésica', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Práctica Kinésica III', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Nuevas tendencias en Rehabilitación', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Taller de formación docente', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Kinesiología Oncológica', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Sujeto y Sociedad', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Informática', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Logística Sanitaria I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Logística Sanitaria II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Logística Sanitaria III', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Desastres I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Transporte Sanitario', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('PrácticasProfesionales I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Patología de Urgencias', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Psicología en Emergencias', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Desastres II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Comunicación en Emergencias', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Terapéutica en Emergencias', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Desastres III', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Gestión y Organización en Emergencias', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Recursos Humanos', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Legislación en Emergencias', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('FARMACOTÉCNIA I: Formas Farmacéuticas no Estériles', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('FARMACOTÉCNIA II: Formas Farmacéuticas no Estériles', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Fundamentos de Farmacología I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Fundamentos de Farmacología II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Farmacopolítica', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Gestión de Stocks y Depósitos', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Estadística', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Estadística I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Estadística II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Estadística Aplicada', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Estadística Aplicada II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Estadística para Economistas', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Estadística Aplicada a datos sociolaborales', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Bioética y Seguridad del Paciente', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Introducción a la Taxonomía Clínica', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Análisis de la Documentación Sanitaria', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Tecnologías de Información y Comunicación en Salud I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Gestión de Pacientes y Redes de Atención I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Gestión de Pacientes y Redes de Atención II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Comunicación en Instituciones de Salud', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Codificación Sanitaria, Clínica y Patológica', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Diseño e Implementación de Proyectos de Sistemas de Información en Salud', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Tecnologías de la Información y Comunicación en Salud II: Validación y Procesamiento', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Proyecto de Documentación Sanitaria', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Desarrollo y Sociedad: problemas y debates contemporáneos', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Elementos para el Análisis de la Sociedad Actual', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Introducción al Derecho', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Introducción a la Economía', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Economía del Sector Público', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Economía Monetaria', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Economía Financiera', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Economía Social y Desarrollo Territorial', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Economía', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Economía y Gestión de las PYMES', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Economía  General', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Economía  Agraria', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Epistemología de las Ciencias Sociales', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Política Económica Argentina', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Contabilidad Pública y Privada', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Análisis Macroeconómico', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Análisis de las Políticas Públicas', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Análisis de las Políticas Públicas II', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Inglés Aplicado a Ciencias Sociales', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Análisis Microeconómico', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Historia del Pensamiento Económico', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Historia del Pensamiento Económico Nacional', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Práctica Laboral', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Taller de Práctica Laboral', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Macroeconomía Avanzada', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Crecimiento y Distribución', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Microeconomía Avanzada', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Estructura Productiva Argentina', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Política Tributaria', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Administración Financiera', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Desarrollo Económico', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Presupuesto y Gestión de Costos', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Metodología de la Investigación Social', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Taller de Trabajo Integrador', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Taller de Trabajo Integrador Final', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Trabajo Integrador Final', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Derecho para Economistas', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Econometría', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Política y Gestión del Desarrollo Productivo', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Evaluación de Inversión en Proyectos Productivos', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Política y Sociedad', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Antropología Social y Cultural', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Introducción a la Sociología', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Metodología y Técnicas de Análisis Cualitativo', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Introducción a la Psicología', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Teoría de la Intervención I. Pobreza y cuestión social', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Teoría de la Intervención II. Migraciones e interculturalidad', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Teoría de la Intervención III. Vulnerabilidad etaria (niños, niñas, jóvenes y adultos mayores) ', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Teoría de la Intervención IV. Problemáticas de Género', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Teoría de la Intervención V. Derechos Humanos y Sociales, Discapacidad e Integración', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Cultura y Sociología del Trabajo ', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Taller I. Actuación profesional en barrios', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Taller II. Actuación profesional en organizaciones o instituciones públicas de migrantes o dedicadas a la atención de grupos etarios', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Taller III. Actuación profesional en espacios de trabajo mujeres en situación de riesgo social', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Demografía Social', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Sociología de las Organizaciones', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Metodología y Técnicas Cuantitativas', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Formulación y gestión de proyectos', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Políticas y Programas de Inclusión Social', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Educación e inclusión ', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Estructura Social Argentina', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Inglés aplicado a las Ciencias Sociales', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Planificación y Gestión Estratégica', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('OSC y Movimientos Sociales en Argentina', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Promoción social de la salud', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Elementos de educación popular para el trabajo comunitario', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Derechos de la Seguridad Social', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Comunicación Institucional',TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Instrumentos de Intervención', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Planificación Social', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Salud Ambiental y principios de epidemiología', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Intervención en instituciones educativas', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Intervención en instituciones de salud', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Pedagogía y Educación Social', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Derecho Municipal', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Sistema Municipal Argentino', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Ciudadanía, participación y políticas públicas', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Intervención en salud comunitaria', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Intervención en instituciones de salud', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Análisis del sistema educativo argentino', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Género, Derechos y Políticas Públicas', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Introducción al Desarrollo Sustentable', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Introducción al conocimiento científico y metodología de la investigación', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Gestión y Administración de las Organizaciones', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Análisis de los Procesos Económicos, Sociales y Ambientales', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Sistemas Administrativos', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Contabilidad', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Comercialización y comunicación', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Microeconomía', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Macroeconomía y Política Económica', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Gestión de los Recursos Humanos', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Impuestos', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Teoría de la organización y organización industrial', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Planificación y Gestión Estratégica', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Desarrollo Económico Local', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Trabajo Final', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Taller de Trabajo Final', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Derecho Privado y Económico', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Gestión de la Producción', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Administración Municipal', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Comercio Internacional', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Administración de PYMES', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Diagnóstico de PYMES', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Finanzas Públicas Locales', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Introducción a la economía', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Introducción a la sociología', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Biología General', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Análisis de procesos económicos y socioambientales', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Gestión y administración de las organizaciones', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Elementos de Física/Química Ambienta', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Análisis de políticas públicas', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Derecho Ambiental', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Ecología General y Recursos Naturales', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Evaluación de impactos y sistemas de gestión', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Gestión del ambiente urbano', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Taller de Trabajo de Práctica Ambiental', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Análisis de los procesos y consecuencias del cambio climático', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Variables e indicadores ambientales', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Gestión ambiental de establecimientos productivos y de servicios', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Gestión de la Comunicación', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Manejo de software especializado', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Gobernanza ambiental, gestión ambiental municipal', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Economía Ambiental', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Energía y sustentabilidad', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Trabajo y ambiente', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Gestión ambiental en establecimientos productivos primarios periurbanos', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Producción Limpia y tecnologías alternativas', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Historia de las Relaciones Laborales', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Análisis de los procesos económicos, sociales y ambientales', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Administración de Persona', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Derechos del Trabajo y Legislación Laboral ', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Gestión y capacitación de recursos humanos', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Historia Económica, Política y Social Argentina', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Psicología Laboral', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Sociología de las Organizaciones', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Análisis económico y modelos de desarrollo', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Políticas de empleo en Argentina', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Condiciones y Medio Ambiente de Trabajo', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Gestión Laboral en la Función Pública', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Asociaciones Sindicales, Negociación Colectiva, Conflicto Laboral y Diálogo Socia', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Comunicación Institucional', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Relaciones de Trabajo en la agroindustria', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Relaciones laborales comparadas', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Metodología de la Investigación cuali-cuantitativa', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Juventud y trabajo: problemáticas, políticas y estrategias de los actores', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Derecho Administrativo y procesal laboral', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Estructura de las organizaciones sindicales y obras sociales', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Ética y Empresa', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Tecnologías aplicadas a la gestión del trabajo', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Relaciones laborales en la economía social y el trabajo autogestionado', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Derechos humanos y género en el mundo laboral', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Reestructuraciones productivas contemporáneas: transformaciones del trabajo y de las relaciones laborales', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Las calificaciones laborales y las estrategias formativas en el Conurbano Sur', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Procesos migratorios y mundo del trabajo: Trayectorias y desafíos emergentes en el escenario global', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Liquidación de sueldos y Jornales', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Gestión de los riesgos del trabajo y calidad de vida laboral', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Seminario de especialización en investigación', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Empresas y represión a la clase trabajadora. Desde la última dictadura hasta la actualidad en el proceso de Memoria, Verdad y Justicia', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Historia de la Ingeniería y la Tecnología', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Introducción a la Química', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Química Orgánica', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Química del Petróleo y Gas', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Geología', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Geología del Petróleo', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Seguridad e Higiene Laboral', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Inglés Aplicado a Ingeniería I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Inglés Aplicado a Ingeniería II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Termodinámica A', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Estática y Resistencia de Materiales I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Estática y Resistencia de Materiales II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Electrotecnia y Máquinas Eléctricas', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Inglés Aplicado a la Ingeniería I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Inglés Aplicado a la Ingeniería II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Mecánica de los Fluidos', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Perforación I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Perforación II ', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Geofísica', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Reservorios I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Reservorios II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Reservorios III', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Probabilidad y Estadística', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Producción de Petróleo I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Producción de Petróleo II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Gestión Ambiental', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Perfilaje de Pozos', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Máquinas térmicas', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Electrónica', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Organización Industrial', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Gestión Económica y Legal', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Gestión Económica y Legal del Petróleo', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Evaluación y Estimulación de Formaciones', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Proyecto de Instalaciones de Superficie', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Desarrollo de Yacimientos', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Práctica Profesional Supervisada', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Industrialización del Petróleo', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Geoquímica', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Geomecánica', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Petrofísica', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Programación y Bases de Datos', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Biología I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Biología II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Máquinas e Instalaciones Eléctricas', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Electrónica, Máquinas e Instalaciones Eléctricas', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Electrónica I (Dispositivos Electónicos)', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Electrónica II (Sistemas Lógicos y Digitales)', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Electrónica III (Circuitos digitales y microprocesadores)', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Gestión de la Calidad, Higiene y Seguridad', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Biomateriales', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Fisiopatología', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Ingeniería Ambiental', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Señales y Sistemas', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Sensores y Adicionadores de Señal', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Automatización y Control', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Instalaciones y Arquitectura Hospitalarias', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Ingeniería Clínica', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Sistemas de Diagnóstico por Imágenes', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Bioinstrumentación I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Bioinstrumentación II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Radiaciones y Radioproteción', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Ingeniería de la Rehabilitación', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Procesamiento de Señales', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Procesamiento de Imágenes Biomédicas', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Electrónica en Potencia', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Informática Médica', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Equipamiento en Laboratorio Clínico', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Sistemas de Salud', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Biocompatibilidad', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Diseño Bioindustrial', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Implantes Biomédicos', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Gestión de Recursos Humanos', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Elementos de la Economía', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Electrotecnia', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Materiales', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Mecánica Racional', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Ingeniería Legal ', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Mecanismos y Elementos de Máquinas', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Dispositivos en Instalaciones Eléctricas', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Circuitos y Máquinas Hidroneumáticas', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Transferencia de Calor y Acondicionamiento de Aire', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Tecnología Mecánica', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Procesos de Fabricación', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Máquinas Térmicas', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Generación, Transporte y Distribución de Energía Eléctrica', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Proyecto de Máquinas', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Mantenimiento Industrial', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Proyecto Integral de Plantas', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Diseño Mecánico de Cañerías', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Ensayos no Destructivos', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Recipientes Sometidos a Presión', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Energías Alternativas', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Estaciones Transformadoras', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Electrónica Industrial', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Instrumentación y Comunicaciones Industriales', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Fundamentos de Informática', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Algoritmos y Programación', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Organización y Arquitectura de Computadoras', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Sistemas Operativos I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Sistemas Operativos II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Complejidad Temporal, Estructuras de Datos y Algoritmos', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Bases de Datos I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Bases de Datos II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Redes de Computadoras I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Redes de Computadoras II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Metodología de Programación I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Metodología de Programación II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Información y Comunicaciones', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Ingeniería de Software I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Ingeniería de Software II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Seguridad de la Información', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Seguridad en Aplicaciones', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Aplicaciones Móviles', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Administración de Proyectos', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Lenguajes Formales y Automatas', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Programación en Tiempo Real', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Sistemas y Organizaciones', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Legislación y Ejercicio Profesional de la Informática', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES (' Gobierno de IT y Auditoría de SI', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Datawarehouse y Bussiness Intelligence', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Gobierno Electrónico', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Aplicación Java sobre Web', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Bioinformática', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Sistemas Distribuídos', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Tráfico en Redes', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Sistemas de Representación', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Desarrollo Emprendedor', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Economía Social y Productiva', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Gestión de la Producción I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Gestión de la Producción II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Ingeniería de la Calidad', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Mecánica y Mecanismos', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Administración General', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Ingeniería de la Cadena del Valor', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Comercialización para Ingenieros', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Sistemas Integrados de Manufactura', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Instalaciones Industriales', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Ingeniería Social', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Diseño y Optimización de Operaciones', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Gestión de Riesgos Empresariales', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Desarrollo Integral de Proyectos', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Creatividad e innovación tecnológica', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Formulación de Proyectos a traves de la metodología del marco lógico', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Gestión de la innovación y la Tecnología', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Políticas científicas y tecnológicas, herramientas y mecanismos de apoyo a la innovación', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Innovacion y propiedad del conocimiento', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Dinámicas de innovacion (taller de discusión de casos reales)', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Estrategias y ámbitos de innovación', TRUE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Sistemas de producción Vegetal Intensiva I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Botánica', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Química General Aplicada', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Taller de TIC', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Fisiología Vegetal', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Suelos y sustratos', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Sistema de Producción Vegetal Intensiva I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Sistema de Producción Vegetal Intensiva II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Sociologia y Extensión Rural', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Climatología Agrícola', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Sanidad y Protección Vegetal', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Práctica Técnico Profesional I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Práctica Técnico Profesional II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Práctica Técnico Profesional III', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Riego en Cultivos Intensivos', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Instalaciones y Maquinaria de Cultivos Intensivos', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Gestión Ambiental de la Producción Vegetal Intensiva', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Sistemas de Producción Hortícola', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Sistemas de Producción Florícola', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Sistemas de Producción Agropecuaria', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Sistemas de Producción  de Aromáticas y Medicinales', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Sistema de Producción Frutícola', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Prácticas Pre Profesionales', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Fisiología Vegetal ', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Sanidad y Protección Vegetal', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Gestión y administración de la empresa agrícola', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Agroecología', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Seminario de Integración: Trabajo Final Técnico Profesional', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Contabilidad Agropecuaria', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Sistemas de Producción Vegetal', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Bases Jurídicas de la Empresa Agropecuaria', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Administración de Empresas Agropecuarias I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Informática para las Ciencias Agrarias', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Sistemas de Producción Animal I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Sistemas de Producción Animal II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Taller de Prácticas Técnico Profesionales III', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Métodos de Investigación', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Extensión y Promoción Rural', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Política Económica Agropecuaria', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Asociativismo Agrario', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Comercialización Agropecuaria', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Procesos Agroindustriales II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Geografía Económica Agraria', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Desarrollo Rural', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Impuestos Agrarios y Agroindustriales', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Calidad y Seguridad Agroalimentaria', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('El Trabajo en el Sector Agrario', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Agregado de Valor', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Tecnología para Pequeños y Medianos Productores', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Bioquímica Agrícola', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Propagación de Plantas', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Manejo de Suelos y Sustratos', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Genética y Mejoramiento Genético', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Manejo de Ambiente Protegido', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Manejo Integrado de Plagas y Enfermedades', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Ecofisiología de Cultivos Hortícolas', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Ecofisiología de Cultivos Florícolas', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Calidad y Poscosecha', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Planificación de Espacios Verdes', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Agroecología Periurbana', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Introducción al Transporte', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Teoría del Estado y las Instituciones Públicas', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Comunicación en Ingeniería', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Diseño de Infraestructura Vial', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Seguridad en el Transporte', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Políticas Públicas de Transporte', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Transporte Guiado', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Transporte Marítimo y Fluvial', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Transporte Aéreo', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Ingeniería en Tránsito', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Planeamiento Territorial I', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Planeamiento Territorial II', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Geomática y Modelos Aplicados', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Creatividad e Innovación Tecnológica', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Logística y Transporte de Cargas', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Transporte Público', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Legislación del Transporte', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Diseño y Optimización de Operaciones', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Diseño y Modelación 3D', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Electrotecnia, Máquinas e Instalaciones Eléctricas', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Electrónica', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Formulación de Proyectos Sociales a través de la Metodología del Marco Lógico', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Fundamentos de Análisis Estratégico, Inteligencia Competitiva y Vigilancia Tecnológica', FALSE);
  INSERT INTO materia(nombre,optativa)
  VALUES ('Gestión de la Innovación y la Tecnología', FALSE);

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
  VALUES (1,14,(SELECT CURRENT_DATE),'Programa de la materia XX 2012');
	
  INSERT INTO programa(planmateria_id,ano_id,fecha,descripcion)
  VALUES (2,14,(SELECT CURRENT_DATE),'Programa de la materia YY 2012');
	
  INSERT INTO programa(planmateria_id,ano_id,fecha,descripcion)
  VALUES (3,14,(SELECT CURRENT_DATE),'Programa de la materia ZZ 2012');
	
  INSERT INTO programa(planmateria_id,ano_id,fecha,descripcion)
  VALUES (1,15,(SELECT CURRENT_DATE),'Programa de la materia XX 2013');
	
  INSERT INTO programa(planmateria_id,ano_id,fecha,descripcion)
  VALUES (2,15,(SELECT CURRENT_DATE),'Programa de la materia YY 2013');
	
  INSERT INTO programa(planmateria_id,ano_id,fecha,descripcion)
  VALUES (3,15,(SELECT CURRENT_DATE),'Programa de la materia ZZ 2013');
	
  INSERT INTO programa(planmateria_id,ano_id,fecha,descripcion)
  VALUES (1,16,(SELECT CURRENT_DATE),'Programa de la materia XX 2014');
	
  INSERT INTO programa(planmateria_id,ano_id,fecha,descripcion)
  VALUES (2,16,(SELECT CURRENT_DATE),'Programa de la materia YY 2014');
	
  INSERT INTO programa(planmateria_id,ano_id,fecha,descripcion)
  VALUES (3,16,(SELECT CURRENT_DATE),'Programa de la materia ZZ 2014');
  
  INSERT INTO programa(planmateria_id,ano_id,fecha,descripcion) 
  VALUES ( 1, 20, '2017-11-07', 'Programa de la materia ZZ 2017');

---
-- Acciones registradas de todo el circuito administrativo (tabla fija), sera parte del modelo proporcionando descripciones.
-- El objetivo de esta tabla es poder completar la tabla actionrole que hace funcionar al 
-- comando app\commands\RoleAccessChecker a travez de la tabla asignsector que depende de esta
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (1,'error/error','Ver pantalla bloqueada');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (2,'site/register','Registrar nuevos usuarios');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (3,'document-upload/delete','Eliminar documentos');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (4,'document-upload/index','Ver lista de documentos');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (5,'document-upload/update','Actualizar documentos');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (6,'document-upload/create','Crear documentos');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (7,'document-upload/view','Ver documentos');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (8,'estado/delete','Eliminar estados');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (9,'estado/index','Ver lista de estados de documentos');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (10,'estado/update','Actualizar estados de documentos');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (11,'estado/create','Crear tipos de estados de documentos');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (12,'estado/view','Ver tipos de estados de documentos');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (13,'instituto/delete','Eliminar nombre de instituto');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (14,'instituto/index','Ver lista de nombres de institutos');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (15,'instituto/update','Actualizar nombre deinstitutos');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (16,'instituto/create','Crear nuevo nombre de institutos');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (17,'instituto/view','Ver nombres de institutos');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (18,'carrera/delete','Eliminar nombre de carreras');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (19,'carrera/index','Ver lista de nombres de carreras');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (20,'carrera/update','Actualizar nombre de carrera');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (21,'carrera/create','Crear nombre de carreras');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (22,'carrera/view','Ver detalle del nombre de carrera');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (23,'materia/delete','Eliminar nombre de materias');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (24,'materia/index','Ver lista de nombres de materias');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (25,'materia/update','Actualizar nombre de materia');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (26,'materia/create','Crear nombre de materias');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (27,'materia/view','Ver detalle del nombre de materias');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (28,'ano/delete','Eliminar años');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (29,'ano/index','Ver lista de años');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (30,'ano/update','Actualizar años');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (31,'ano/create','Crear años');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (32,'ano/view','Ver años');
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
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (63,'site/indexUserAdmCPE','Home del administrador y usuario CPE');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (64,'planes/index','Ver lista de planes creados');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (65,'planes/view','Ver detalle del plan');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (66,'planes/update','Actualiza planes creados');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (67,'planes/delete','Elimina planes creados');
	INSERT INTO actionrole(actionrole_id,action_disp,descripcion)VALUES (68,'planes/create','Crea planes de estudio');
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
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (63,2);--acceso a site/indexUserAdmCPE
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
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (64,2);--acceso a planes/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (65,2);--acceso a planes/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (68,2);--acceso a planes/create
---
-- Acciones configurables para: 'Usuario de Prensa','Usr Pr'
---
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (58,3);--acceso a programa/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (59,3);--acceso a programa/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (7,3);--acceso a archivoprograma/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (4,3);--acceso a archivoprograma/index


---
-- Acciones configurables para: 'Usuario del Instituto de Estudios Iniciales','Usr IEI', id34
---
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (58,4);--acceso a programa/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (59,4);--acceso a programa/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (7,4);--acceso a archivoprograma/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (4,4);--acceso a archivoprograma/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (5,4);--acceso a archivoprograma/update
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (6,4);--acceso a archivprograma/create
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (3,4);--acceso a archivoprograma/delete
---
-- Acciones configurables para: 'Usuario del Instituto de Ciencias de la Salud - Licenciatura en Kinesiología y Fisiatría','ICS/Kin',id5
---
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (58,5);--acceso a programa/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (59,5);--acceso a programa/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (7,5);--acceso a archivoprograma/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (4,5);--acceso a archivoprograma/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (5,5);--acceso a archivoprograma/update
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (6,5);--acceso a archivprograma/create
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (3,5);--acceso a archivoprograma/delete
---
-- Acciones configurables para: 'Usuario del Instituto de Ciencias de la Salud - Medicina','ICS/Medicina,id6
---
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (58,6);--acceso a programa/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (59,6);--acceso a programa/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (7,6);--acceso a archivoprograma/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (4,6);--acceso a archivoprograma/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (5,6);--acceso a archivoprograma/update
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (6,6);--acceso a archivprograma/create
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (3,6);--acceso a archivoprograma/delete
---
-- Acciones configurables para: 'Usuario del Instituto de Ciencias de la Salud - Bioquímica','ICS/Bioquímica',id7
---
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (58,7);--acceso a programa/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (59,7);--acceso a programa/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (7,7);--acceso a archivoprograma/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (4,7);--acceso a archivoprograma/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (5,7);--acceso a archivoprograma/update
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (6,7);--acceso a archivprograma/create
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (3,7);--acceso a archivoprograma/delete
---
-- Acciones configurables para: 'Usuario del Instituto de Ciencias de la Salud - Licenciatura en Enfermería','ICS/Enfermería',id8
---
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (58,8);--acceso a programa/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (59,8);--acceso a programa/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (7,8);--acceso a archivoprograma/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (4,8);--acceso a archivoprograma/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (5,8);--acceso a archivoprograma/update
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (6,8);--acceso a archivprograma/create
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (3,8);--acceso a archivoprograma/delete
---
-- Acciones configurables para: 'Usuario ..,id9
---
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (58,9);--acceso a programa/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (59,9);--acceso a programa/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (7,9);--acceso a archivoprograma/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (4,9);--acceso a archivoprograma/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (5,9);--acceso a archivoprograma/update
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (6,9);--acceso a archivprograma/create
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (3,9);--acceso a archivoprograma/delete
---
-- Acciones configurables para: 'Usuario ..,id10
---
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (58,10);--acceso a programa/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (59,10);--acceso a programa/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (7,10);--acceso a archivoprograma/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (4,10);--acceso a archivoprograma/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (5,10);--acceso a archivoprograma/update
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (6,10);--acceso a archivprograma/create
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (3,10);--acceso a archivoprograma/delete
---
-- Acciones configurables para: 'Usuario ..,id11
---
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (58,11);--acceso a programa/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (59,11);--acceso a programa/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (7,11);--acceso a archivoprograma/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (4,11);--acceso a archivoprograma/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (5,11);--acceso a archivoprograma/update
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (6,11);--acceso a archivprograma/create
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (3,11);--acceso a archivoprograma/delete
---
-- Acciones configurables para: 'Usuario ..,id12
---
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (58,12);--acceso a programa/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (59,12);--acceso a programa/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (7,12);--acceso a archivoprograma/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (4,12);--acceso a archivoprograma/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (5,12);--acceso a archivoprograma/update
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (6,12);--acceso a archivprograma/create
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (3,12);--acceso a archivoprograma/delete
---
-- Acciones configurables para: 'Usuario ..,id13
---
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (58,13);--acceso a programa/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (59,13);--acceso a programa/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (7,13);--acceso a archivoprograma/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (4,13);--acceso a archivoprograma/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (5,13);--acceso a archivoprograma/update
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (6,13);--acceso a archivprograma/create
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (3,13);--acceso a archivoprograma/delete
---
-- Acciones configurables para: 'Usuario ..,id14
---
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (58,14);--acceso a programa/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (59,14);--acceso a programa/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (7,14);--acceso a archivoprograma/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (4,14);--acceso a archivoprograma/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (5,14);--acceso a archivoprograma/update
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (6,14);--acceso a archivprograma/create
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (3,14);--acceso a archivoprograma/delete
---
-- Acciones configurables para: 'Usuario ..,id15
---
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (58,15);--acceso a programa/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (59,15);--acceso a programa/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (7,15);--acceso a archivoprograma/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (4,15);--acceso a archivoprograma/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (5,15);--acceso a archivoprograma/update
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (6,15);--acceso a archivprograma/create
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (3,15);--acceso a archivoprograma/delete
---
-- Acciones configurables para: 'Usuario ..,id16
---
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (58,16);--acceso a programa/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (59,16);--acceso a programa/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (7,16);--acceso a archivoprograma/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (4,16);--acceso a archivoprograma/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (5,16);--acceso a archivoprograma/update
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (6,16);--acceso a archivprograma/create
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (3,16);--acceso a archivoprograma/delete
---
-- Acciones configurables para: 'Usuario ..,id17
---
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (58,17);--acceso a programa/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (59,17);--acceso a programa/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (7,17);--acceso a archivoprograma/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (4,17);--acceso a archivoprograma/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (5,17);--acceso a archivoprograma/update
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (6,17);--acceso a archivprograma/create
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (3,17);--acceso a archivoprograma/delete
---
-- Acciones configurables para: 'Usuario ..,id18
---
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (58,18);--acceso a programa/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (59,18);--acceso a programa/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (7,18);--acceso a archivoprograma/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (4,18);--acceso a archivoprograma/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (5,18);--acceso a archivoprograma/update
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (6,18);--acceso a archivprograma/create
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (3,18);--acceso a archivoprograma/delete
---
-- Acciones configurables para: 'Usuario ..,id19
---
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (58,19);--acceso a programa/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (59,19);--acceso a programa/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (7,19);--acceso a archivoprograma/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (4,19);--acceso a archivoprograma/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (5,19);--acceso a archivoprograma/update
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (6,19);--acceso a archivprograma/create
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (3,19);--acceso a archivoprograma/delete
---
-- Acciones configurables para: 'Usuario ..,id20
---
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (58,20);--acceso a programa/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (59,20);--acceso a programa/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (7,20);--acceso a archivoprograma/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (4,20);--acceso a archivoprograma/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (5,20);--acceso a archivoprograma/update
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (6,20);--acceso a archivprograma/create
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (3,20);--acceso a archivoprograma/delete
---
-- Acciones configurables para: 'Usuario ..,id21
---
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (58,21);--acceso a programa/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (59,21);--acceso a programa/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (7,21);--acceso a archivoprograma/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (4,21);--acceso a archivoprograma/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (5,21);--acceso a archivoprograma/update
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (6,21);--acceso a archivprograma/create
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (3,21);--acceso a archivoprograma/delete
---
-- Acciones configurables para: 'Usuario ..,id22
---
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (58,22);--acceso a programa/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (59,22);--acceso a programa/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (7,22);--acceso a archivoprograma/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (4,22);--acceso a archivoprograma/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (5,22);--acceso a archivoprograma/update
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (6,22);--acceso a archivprograma/create
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (3,22);--acceso a archivoprograma/delete
---
-- Acciones configurables para: 'Usuario ..,id23
---
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (58,23);--acceso a programa/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (59,23);--acceso a programa/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (7,23);--acceso a archivoprograma/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (4,23);--acceso a archivoprograma/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (5,23);--acceso a archivoprograma/update
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (6,23);--acceso a archivprograma/create
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (3,23);--acceso a archivoprograma/delete
---
-- Acciones configurables para: 'Usuario ..,id24
---
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (58,24);--acceso a programa/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (59,24);--acceso a programa/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (7,24);--acceso a archivoprograma/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (4,24);--acceso a archivoprograma/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (5,24);--acceso a archivoprograma/update
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (6,24);--acceso a archivprograma/create
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (3,24);--acceso a archivoprograma/delete
---
-- Acciones configurables para: 'Usuario ..,id25
---
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (58,25);--acceso a programa/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (59,25);--acceso a programa/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (7,25);--acceso a archivoprograma/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (4,25);--acceso a archivoprograma/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (5,25);--acceso a archivoprograma/update
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (6,25);--acceso a archivprograma/create
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (3,25);--acceso a archivoprograma/delete
---
-- Acciones configurables para: 'Usuario ..,id26
---
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (58,26);--acceso a programa/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (59,26);--acceso a programa/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (7,26);--acceso a archivoprograma/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (4,26);--acceso a archivoprograma/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (5,26);--acceso a archivoprograma/update
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (6,26);--acceso a archivprograma/create
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (3,26);--acceso a archivoprograma/delete
---
-- Acciones configurables para: 'Usuario ..,id27
---
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (58,27);--acceso a programa/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (59,27);--acceso a programa/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (7,27);--acceso a archivoprograma/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (4,27);--acceso a archivoprograma/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (5,27);--acceso a archivoprograma/update
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (6,27);--acceso a archivprograma/create
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (3,27);--acceso a archivoprograma/delete
---
-- Acciones configurables para: 'Usuario ..,id28
---
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (58,28);--acceso a programa/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (59,28);--acceso a programa/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (7,28);--acceso a archivoprograma/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (4,28);--acceso a archivoprograma/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (5,28);--acceso a archivoprograma/update
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (6,28);--acceso a archivprograma/create
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (3,28);--acceso a archivoprograma/delete
---
-- Acciones configurables para: 'Usuario ..,id29
---
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (58,29);--acceso a programa/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (59,29);--acceso a programa/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (7,29);--acceso a archivoprograma/view
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (4,29);--acceso a archivoprograma/index
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (5,29);--acceso a archivoprograma/update
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (6,29);--acceso a archivprograma/create
	INSERT INTO asignsector(actionrole_id,sector_id)VALUES (3,29);--acceso a archivoprograma/delete

----
-- Modos de lectura escritura
--
	INSERT INTO moderw(moderw)VALUES('OTROS|LECTOESCR_SECTOR|LECTOESCR_USUARIO|LECTOESCR');
	INSERT INTO moderw(moderw)VALUES('OTROS|LECTOESCR_SECTOR|LECTOESCR_USUARIO|LECTURA');
	INSERT INTO moderw(moderw)VALUES('OTROS|LECTOESCR_SECTOR|LECTOESCR_USUARIO|ESCRITURA');
	INSERT INTO moderw(moderw)VALUES('OTROS|LECTOESCR_SECTOR|LECTOESCR_USUARIO|INACCESIBLE');
	INSERT INTO moderw(moderw)VALUES('OTROS|LECTOESCR_SECTOR|LECTURA_USUARIO|LECTOESCR');
	INSERT INTO moderw(moderw)VALUES('OTROS|LECTOESCR_SECTOR|LECTURA_USUARIO|LECTURA');
	INSERT INTO moderw(moderw)VALUES('OTROS|LECTOESCR_SECTOR|LECTURA_USUARIO|ESCRITURA');
	INSERT INTO moderw(moderw)VALUES('OTROS|LECTOESCR_SECTOR|LECTURA_USUARIO|INACCESIBLE');
	INSERT INTO moderw(moderw)VALUES('OTROS|LECTOESCR_SECTOR|ESCRITURA_USUARIO|LECTOESCR');
	INSERT INTO moderw(moderw)VALUES('OTROS|LECTOESCR_SECTOR|ESCRITURA_USUARIO|LECTURA');
	INSERT INTO moderw(moderw)VALUES('OTROS|LECTOESCR_SECTOR|ESCRITURA_USUARIO|ESCRITURA');
	INSERT INTO moderw(moderw)VALUES('OTROS|LECTOESCR_SECTOR|ESCRITURA_USUARIO|INACCESIBLE');
	INSERT INTO moderw(moderw)VALUES('OTROS|LECTOESCR_SECTOR|INACCESIBLE_USUARIO|LECTOESCR');
	INSERT INTO moderw(moderw)VALUES('OTROS|LECTOESCR_SECTOR|INACCESIBLE_USUARIO|LECTURA');
	INSERT INTO moderw(moderw)VALUES('OTROS|LECTOESCR_SECTOR|INACCESIBLE_USUARIO|ESCRITURA');
	INSERT INTO moderw(moderw)VALUES('OTROS|LECTOESCR_SECTOR|INACCESIBLE_USUARIO|INACCESIBLE');
	INSERT INTO moderw(moderw)VALUES('OTROS|LECTURA_SECTOR|LECTOESCR_USUARIO|LECTOESCR');
	INSERT INTO moderw(moderw)VALUES('OTROS|LECTURA_SECTOR|LECTOESCR_USUARIO|LECTURA');
	INSERT INTO moderw(moderw)VALUES('OTROS|LECTURA_SECTOR|LECTOESCR_USUARIO|ESCRITURA');
	INSERT INTO moderw(moderw)VALUES('OTROS|LECTURA_SECTOR|LECTOESCR_USUARIO|INACCESIBLE');
	INSERT INTO moderw(moderw)VALUES('OTROS|LECTURA_SECTOR|LECTURA_USUARIO|LECTOESCR');
	INSERT INTO moderw(moderw)VALUES('OTROS|LECTURA_SECTOR|LECTURA_USUARIO|LECTURA');
	INSERT INTO moderw(moderw)VALUES('OTROS|LECTURA_SECTOR|LECTURA_USUARIO|ESCRITURA');
	INSERT INTO moderw(moderw)VALUES('OTROS|LECTURA_SECTOR|LECTURA_USUARIO|INACCESIBLE');
	INSERT INTO moderw(moderw)VALUES('OTROS|LECTURA_SECTOR|ESCRITURA_USUARIO|LECTOESCR');
	INSERT INTO moderw(moderw)VALUES('OTROS|LECTURA_SECTOR|ESCRITURA_USUARIO|LECTURA');
	INSERT INTO moderw(moderw)VALUES('OTROS|LECTURA_SECTOR|ESCRITURA_USUARIO|ESCRITURA');
	INSERT INTO moderw(moderw)VALUES('OTROS|LECTURA_SECTOR|ESCRITURA_USUARIO|INACCESIBLE');
	INSERT INTO moderw(moderw)VALUES('OTROS|LECTURA_SECTOR|INACCESIBLE_USUARIO|LECTOESCR');
	INSERT INTO moderw(moderw)VALUES('OTROS|LECTURA_SECTOR|INACCESIBLE_USUARIO|LECTURA');
	INSERT INTO moderw(moderw)VALUES('OTROS|LECTURA_SECTOR|INACCESIBLE_USUARIO|ESCRITURA');
	INSERT INTO moderw(moderw)VALUES('OTROS|LECTURA_SECTOR|INACCESIBLE_USUARIO|INACCESIBLE');
	INSERT INTO moderw(moderw)VALUES('OTROS|ESCRITURA_SECTOR|LECTOESCR_USUARIO|LECTOESCR');
	INSERT INTO moderw(moderw)VALUES('OTROS|ESCRITURA_SECTOR|LECTOESCR_USUARIO|LECTURA');
	INSERT INTO moderw(moderw)VALUES('OTROS|ESCRITURA_SECTOR|LECTOESCR_USUARIO|ESCRITURA');
	INSERT INTO moderw(moderw)VALUES('OTROS|ESCRITURA_SECTOR|LECTOESCR_USUARIO|INACCESIBLE');
	INSERT INTO moderw(moderw)VALUES('OTROS|ESCRITURA_SECTOR|LECTURA_USUARIO|LECTOESCR');
	INSERT INTO moderw(moderw)VALUES('OTROS|ESCRITURA_SECTOR|LECTURA_USUARIO|LECTURA');
	INSERT INTO moderw(moderw)VALUES('OTROS|ESCRITURA_SECTOR|LECTURA_USUARIO|ESCRITURA');
	INSERT INTO moderw(moderw)VALUES('OTROS|ESCRITURA_SECTOR|LECTURA_USUARIO|INACCESIBLE');
	INSERT INTO moderw(moderw)VALUES('OTROS|ESCRITURA_SECTOR|ESCRITURA_USUARIO|LECTOESCR');
	INSERT INTO moderw(moderw)VALUES('OTROS|ESCRITURA_SECTOR|ESCRITURA_USUARIO|LECTURA');
	INSERT INTO moderw(moderw)VALUES('OTROS|ESCRITURA_SECTOR|ESCRITURA_USUARIO|ESCRITURA');
	INSERT INTO moderw(moderw)VALUES('OTROS|ESCRITURA_SECTOR|ESCRITURA_USUARIO|INACCESIBLE');
	INSERT INTO moderw(moderw)VALUES('OTROS|ESCRITURA_SECTOR|INACCESIBLE_USUARIO|LECTOESCR');
	INSERT INTO moderw(moderw)VALUES('OTROS|ESCRITURA_SECTOR|INACCESIBLE_USUARIO|LECTURA');
	INSERT INTO moderw(moderw)VALUES('OTROS|ESCRITURA_SECTOR|INACCESIBLE_USUARIO|ESCRITURA');
	INSERT INTO moderw(moderw)VALUES('OTROS|ESCRITURA_SECTOR|INACCESIBLE_USUARIO|INACCESIBLE');
	INSERT INTO moderw(moderw)VALUES('OTROS|INACCESIBLE_SECTOR|LECTOESCR_USUARIO|LECTOESCR');
	INSERT INTO moderw(moderw)VALUES('OTROS|INACCESIBLE_SECTOR|LECTOESCR_USUARIO|LECTURA');
	INSERT INTO moderw(moderw)VALUES('OTROS|INACCESIBLE_SECTOR|LECTOESCR_USUARIO|ESCRITURA');
	INSERT INTO moderw(moderw)VALUES('OTROS|INACCESIBLE_SECTOR|LECTOESCR_USUARIO|INACCESIBLE');
	INSERT INTO moderw(moderw)VALUES('OTROS|INACCESIBLE_SECTOR|LECTURA_USUARIO|LECTOESCR');
	INSERT INTO moderw(moderw)VALUES('OTROS|INACCESIBLE_SECTOR|LECTURA_USUARIO|LECTURA');
	INSERT INTO moderw(moderw)VALUES('OTROS|INACCESIBLE_SECTOR|LECTURA_USUARIO|ESCRITURA');
	INSERT INTO moderw(moderw)VALUES('OTROS|INACCESIBLE_SECTOR|LECTURA_USUARIO|INACCESIBLE');
	INSERT INTO moderw(moderw)VALUES('OTROS|INACCESIBLE_SECTOR|ESCRITURA_USUARIO|LECTOESCR');
	INSERT INTO moderw(moderw)VALUES('OTROS|INACCESIBLE_SECTOR|ESCRITURA_USUARIO|LECTURA');
	INSERT INTO moderw(moderw)VALUES('OTROS|INACCESIBLE_SECTOR|ESCRITURA_USUARIO|ESCRITURA');
	INSERT INTO moderw(moderw)VALUES('OTROS|INACCESIBLE_SECTOR|ESCRITURA_USUARIO|INACCESIBLE');
	INSERT INTO moderw(moderw)VALUES('OTROS|INACCESIBLE_SECTOR|INACCESIBLE_USUARIO|LECTOESCR');
	INSERT INTO moderw(moderw)VALUES('OTROS|INACCESIBLE_SECTOR|INACCESIBLE_USUARIO|LECTURA');
	INSERT INTO moderw(moderw)VALUES('OTROS|INACCESIBLE_SECTOR|INACCESIBLE_USUARIO|ESCRITURA');
	INSERT INTO moderw(moderw)VALUES('OTROS|INACCESIBLE_SECTOR|INACCESIBLE_USUARIO|INACCESIBLE');


	END;

COMMIT;
