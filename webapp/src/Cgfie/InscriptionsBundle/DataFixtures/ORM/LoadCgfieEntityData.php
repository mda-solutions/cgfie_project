<?php
	namespace Cgfie\InscriptionsBundle\DataFixtures\ORM;

	use Doctrine\Common\DataFixtures\FixtureInterface;
	use Doctrine\Common\Persistence\ObjectManager;
	use Cgfie\InscriptionsBundle\Entity\CgfieEntity;
	use \stdClass;

	class LoadCgfieEntityData implements FixtureInterface
	{

	    /**
	     * {@inheritDoc}
	     */
	    public function load(ObjectManager $manager)
	    {	 		
	 		$ENTITIES = self::getUA();

	 		foreach ($ENTITIES as $entity) 
	 		{
					$cgfie_entity = new CgfieEntity();
					$cgfie_entity->setName($entity->name);
					$cgfie_entity->setAcronym($entity->acronym);
					$cgfie_entity->setLevel($entity->level);

			        $manager->persist($cgfie_entity);
			        $manager->flush();	 			
	 		}
	    }

	    static public function getUA()
	    {
			$entities = array();

			$entity1 = new stdClass();
			$entity1->name = "Dirección General";
			$entity1->acronym = " DG Zacatenco";
			$entity1->level = "Unidades Administrativas";
			array_push($entities, $entity1);

			$entity2 = new stdClass();
			$entity2->name = "Coordinación General de Servicios Informáticos";
			$entity2->acronym = " CGSI Zacatenco";
			$entity2->level = "Unidades Administrativas";
			array_push($entities, $entity2);

			$entity3 = new stdClass();
			$entity3->name = "Oficina del Abogado General";
			$entity3->acronym = " OAG ";
			$entity3->level = "Unidades Administrativas";
			array_push($entities, $entity3);

			$entity4 = new stdClass();
			$entity4->name = "Dirección de Asuntos Jurídicos";
			$entity4->acronym = " DAJ ";
			$entity4->level = "Unidades Administrativas";
			array_push($entities, $entity4);

			$entity5 = new stdClass();
			$entity5->name = "Dirección de Normatividad Consulta y Dictaminación";
			$entity5->acronym = "DNCD";
			$entity5->level = "Unidades Administrativas";
			array_push($entities, $entity5);

			$entity6 = new stdClass();
			$entity6->name = "Defensoría de Los Derechos Politécnicos";
			$entity6->acronym = " DDP ";
			$entity6->level = "Unidades Administrativas";
			array_push($entities, $entity6);

			$entity7 = new stdClass();
			$entity7->name = "Decanato";
			$entity7->acronym = " ";
			$entity7->level = "Unidades Administrativas";
			array_push($entities, $entity7);

			$entity8 = new stdClass();
			$entity8->name = "Secretaría General";
			$entity8->acronym = "SG";
			$entity8->level = "Unidades Administrativas";
			array_push($entities, $entity8);

			$entity9 = new stdClass();
			$entity9->name = "Secretaría Académica";
			$entity9->acronym = " SA ";
			$entity9->level = "Unidades Administrativas";
			array_push($entities, $entity9);

			$entity10 = new stdClass();
			$entity10->name = "Dirección de Educación Media Superior";
			$entity10->acronym = " DEMS ";
			$entity10->level = "Unidades Administrativas";
			array_push($entities, $entity10);

			$entity11 = new stdClass();
			$entity11->name = "Dirección de Educación Superior";
			$entity11->acronym = " DES ";
			$entity11->level = "Unidades Administrativas";
			array_push($entities, $entity11);

			$entity12 = new stdClass();
			$entity12->name = "Dirección de Formación en Lenguas Extranjeras";
			$entity12->acronym = " DFLE ";
			$entity12->level = "Unidades Administrativas";
			array_push($entities, $entity12);

			$entity13 = new stdClass();
			$entity13->name = "Secretaría de Investigación y Posgrado";
			$entity13->acronym = " SEPI ";
			$entity13->level = "Unidades Administrativas";
			array_push($entities, $entity13);

			$entity14 = new stdClass();
			$entity14->name = "Dirección de Postgrado";
			$entity14->acronym = " DP ";
			$entity14->level = "Unidades Administrativas";
			array_push($entities, $entity14);

			$entity15 = new stdClass();
			$entity15->name = "Dirección de Investigación";
			$entity15->acronym = " DI ";
			$entity15->level = "Unidades Administrativas";
			array_push($entities, $entity15);

			$entity16 = new stdClass();
			$entity16->name = "Secretaría de Servicios Educativos";
			$entity16->acronym = " SSE ";
			$entity16->level = "Unidades Administrativas";
			array_push($entities, $entity16);

			$entity17 = new stdClass();
			$entity17->name = "Dirección de Administración Escolar";
			$entity17->acronym = " DAE Zacatenco";
			$entity17->level = "Unidades Administrativas";
			array_push($entities, $entity17);

			$entity18 = new stdClass();
			$entity18->name = "Dirección de Servicios Estudiantiles";
			$entity18->acronym = " DSE ";
			$entity18->level = "Unidades Administrativas";
			array_push($entities, $entity18);

			$entity19 = new stdClass();
			$entity19->name = "Dirección de Bibliotecas";
			$entity19->acronym = " DB ";
			$entity19->level = "Unidades Administrativas";
			array_push($entities, $entity19);

			$entity20 = new stdClass();
			$entity20->name = "Dirección de Difusión y Fomento a la Cultura";
			$entity20->acronym = " DDFC ";
			$entity20->level = "Unidades Administrativas";
			array_push($entities, $entity20);

			$entity21 = new stdClass();
			$entity21->name = "Dirección de Desarrollo y Fomento Deportivo";
			$entity21->acronym = " DDFD ";
			$entity21->level = "Unidades Administrativas";
			array_push($entities, $entity21);

			$entity22 = new stdClass();
			$entity22->name = "Secretaría de Extensión e Integración Social";
			$entity22->acronym = " SEIS ";
			$entity22->level = "Unidades Administrativas";
			array_push($entities, $entity22);

			$entity23 = new stdClass();
			$entity23->name = "Dirección de Egresados y Servicio Social";
			$entity23->acronym = " DESS ";
			$entity23->level = "Unidades Administrativas";
			array_push($entities, $entity23);

			$entity24 = new stdClass();
			$entity24->name = "Dirección de Publicaciones";
			$entity24->acronym = " Dpu ";
			$entity24->level = "Unidades Administrativas";
			array_push($entities, $entity24);

			$entity25 = new stdClass();
			$entity25->name = "Dirección de Educación Continua";
			$entity25->acronym = " DEC ";
			$entity25->level = "Unidades Administrativas";
			array_push($entities, $entity25);

			$entity26 = new stdClass();
			$entity26->name = "Coordinación de Cooperación Académica";
			$entity26->acronym = " CCA ";
			$entity26->level = "Unidades Administrativas";
			array_push($entities, $entity26);

			$entity27 = new stdClass();
			$entity27->name = "Secretaría de Gestión Estrategica";
			$entity27->acronym = " ";
			$entity27->level = "Unidades Administrativas";
			array_push($entities, $entity27);

			$entity28 = new stdClass();
			$entity28->name = "Dirección de Planeación";
			$entity28->acronym = " ";
			$entity28->level = "Unidades Administrativas";
			array_push($entities, $entity28);

			$entity29 = new stdClass();
			$entity29->name = "Dirección de Evaluación";
			$entity29->acronym = " ";
			$entity29->level = "Unidades Administrativas";
			array_push($entities, $entity29);

			$entity30 = new stdClass();
			$entity30->name = "Secretaría de Administración";
			$entity30->acronym = " SA ";
			$entity30->level = "Unidades Administrativas";
			array_push($entities, $entity30);

			$entity31 = new stdClass();
			$entity31->name = "Dirección de Capital Humano";
			$entity31->acronym = " DCH ";
			$entity31->level = "Unidades Administrativas";
			array_push($entities, $entity31);

			$entity32 = new stdClass();
			$entity32->name = "Dirección de Programación y Presupuesto";
			$entity32->acronym = " DPyP ";
			$entity32->level = "Unidades Administrativas";
			array_push($entities, $entity32);

			$entity33 = new stdClass();
			$entity33->name = "Dirección de Recursos Materiales y Servicios";
			$entity33->acronym = " DRMyS ";
			$entity33->level = "Unidades Administrativas";
			array_push($entities, $entity33);

			$entity34 = new stdClass();
			$entity34->name = "Centro de Estudios Científicos y Tecnológicos No 1";
			$entity34->acronym = " CECyT No. 1 Gonzálo Vázquez Vela";
			$entity34->level = "Unidades Académicas de Nivel Medio Superior";
			array_push($entities, $entity34);

			$entity35 = new stdClass();
			$entity35->name = "Centro de Estudios Científicos y Tecnológicos No 2";
			$entity35->acronym = " CECyT No. 2 Miguel Bernard";
			$entity35->level = "Unidades Académicas de Nivel Medio Superior";
			array_push($entities, $entity35);

			$entity36 = new stdClass();
			$entity36->name = "Centro de Estudios Científicos y Tecnológicos No 3";
			$entity36->acronym = " CECyT No. 3 Estanislao Ramírez Ruiz";
			$entity36->level = "Unidades Académicas de Nivel Medio Superior";
			array_push($entities, $entity36);

			$entity37 = new stdClass();
			$entity37->name = "Centro de Estudios Científicos y Tecnológicos No 4";
			$entity37->acronym = " CECyT No. 4 Lázaro Cárdenas";
			$entity37->level = "Unidades Académicas de Nivel Medio Superior";
			array_push($entities, $entity37);

			$entity38 = new stdClass();
			$entity38->name = "Centro de Estudios Científicos y Tecnológicos No 5";
			$entity38->acronym = " CECyT No. 5 Benito Juárez";
			$entity38->level = "Unidades Académicas de Nivel Medio Superior";
			array_push($entities, $entity38);

			$entity39 = new stdClass();
			$entity39->name = "Centro de Estudios Científicos y Tecnológicos No 6";
			$entity39->acronym = " CECyT No. 6 Miguel Othon De Mendizabal";
			$entity39->level = "Unidades Académicas de Nivel Medio Superior";
			array_push($entities, $entity39);

			$entity40 = new stdClass();
			$entity40->name = "Centro de Estudios Científicos y Tecnológicos No 7";
			$entity40->acronym = " CECyT No. 7 Cuauhtemoc";
			$entity40->level = "Unidades Académicas de Nivel Medio Superior";
			array_push($entities, $entity40);

			$entity41 = new stdClass();
			$entity41->name = "Centro de Estudios Científicos y Tecnológicos No 8";
			$entity41->acronym = " CECyT No. 8 Narciso Bassols";
			$entity41->level = "Unidades Académicas de Nivel Medio Superior";
			array_push($entities, $entity41);

			$entity42 = new stdClass();
			$entity42->name = "Centro de Estudios Científicos y Tecnológicos No 9";
			$entity42->acronym = " CECyT No. 9 Juan De Dios Batiz";
			$entity42->level = "Unidades Académicas de Nivel Medio Superior";
			array_push($entities, $entity42);

			$entity43 = new stdClass();
			$entity43->name = "Centro de Estudios Científicos y Tecnológicos No 10";
			$entity43->acronym = " CECyT No. 10 Carlos Vallejo Márquez";
			$entity43->level = "Unidades Académicas de Nivel Medio Superior";
			array_push($entities, $entity43);

			$entity44 = new stdClass();
			$entity44->name = "Centro de Estudios Científicos y Tecnológicos No 11";
			$entity44->acronym = " CECyT No. 11 Wilfrido Massieu";
			$entity44->level = "Unidades Académicas de Nivel Medio Superior";
			array_push($entities, $entity44);

			$entity45 = new stdClass();
			$entity45->name = "Centro de Estudios Científicos y Tecnológicos No 12";
			$entity45->acronym = " CECyT No. 12 José María Morelos";
			$entity45->level = "Unidades Académicas de Nivel Medio Superior";
			array_push($entities, $entity45);

			$entity46 = new stdClass();
			$entity46->name = "Centro de Estudios Científicos y Tecnológicos No 13";
			$entity46->acronym = " CECyT No. 13 Ricardo Flores Magon";
			$entity46->level = "Unidades Académicas de Nivel Medio Superior";
			array_push($entities, $entity46);

			$entity47 = new stdClass();
			$entity47->name = "Centro de Estudios Científicos y Tecnológicos No 14";
			$entity47->acronym = " CECyT No. 14 Luis Enrique Erro";
			$entity47->level = "Unidades Académicas de Nivel Medio Superior";
			array_push($entities, $entity47);

			$entity48 = new stdClass();
			$entity48->name = "Centro de Estudios Científicos y Tecnológicos No 15";
			$entity48->acronym = " CECyT No. 15 Diodoro Antunez Echegaray";
			$entity48->level = "Unidades Académicas de Nivel Medio Superior";
			array_push($entities, $entity48);

			$entity49 = new stdClass();
			$entity49->name = "Centro de Estudios Tecnológicos No 1";
			$entity49->acronym = " CET No. 1 Walter Cross Buchanan";
			$entity49->level = "Unidades Académicas de Nivel Medio Superior";
			array_push($entities, $entity49);

			$entity50 = new stdClass();
			$entity50->name = "Escuela Superior de Ingeniería Mecánica y Eléctrica";
			$entity50->acronym = " ESIME Zacatenco";
			$entity50->level = "Unidades Académicas de Nivel Superior";
			array_push($entities, $entity50);

			$entity51 = new stdClass();
			$entity51->name = "Escuela Superior de Ingeniería Mecánica y Eléctrica";
			$entity51->acronym = " ESIME Culhuacan";
			$entity51->level = "Unidades Académicas de Nivel Superior";
			array_push($entities, $entity51);

			$entity52 = new stdClass();
			$entity52->name = "Escuela Superior de Ingeniería Mecánica y Eléctrica";
			$entity52->acronym = " ESIME Azcapotzalco";
			$entity52->level = "Unidades Académicas de Nivel Superior";
			array_push($entities, $entity52);

			$entity53 = new stdClass();
			$entity53->name = "Escuela Superior de Ingeniería Mecánica y Eléctrica";
			$entity53->acronym = " ESIME Ticoman";
			$entity53->level = "Unidades Académicas de Nivel Superior";
			array_push($entities, $entity53);

			$entity54 = new stdClass();
			$entity54->name = "Escuela Superior de Ingeniería y Arquitectura";
			$entity54->acronym = " ESIA Zacatenco";
			$entity54->level = "Unidades Académicas de Nivel Superior";
			array_push($entities, $entity54);

			$entity55 = new stdClass();
			$entity55->name = "Escuela Superior de Ingeniería y Arquitectura";
			$entity55->acronym = " ESIA Tecamachalco";
			$entity55->level = "Unidades Académicas de Nivel Superior";
			array_push($entities, $entity55);

			$entity56 = new stdClass();
			$entity56->name = "Escuela Superior de Ingeniería y Arquitectura";
			$entity56->acronym = " ESIA Ticoman";
			$entity56->level = "Unidades Académicas de Nivel Superior";
			array_push($entities, $entity56);

			$entity57 = new stdClass();
			$entity57->name = "Escuela Superior de Ingeniería Textil";
			$entity57->acronym = " ESIT ";
			$entity57->level = "Unidades Académicas de Nivel Superior";
			array_push($entities, $entity57);

			$entity58 = new stdClass();
			$entity58->name = "Escuela Superior de Ingeniería Química e Industrias Extractivas";
			$entity58->acronym = " ESIQIE Zacatenco";
			$entity58->level = "Unidades Académicas de Nivel Superior";
			array_push($entities, $entity58);

			$entity59 = new stdClass();
			$entity59->name = "Escuela Superior de Física y Matemáticas";
			$entity59->acronym = " ESFM Zacatenco";
			$entity59->level = "Unidades Académicas de Nivel Superior";
			array_push($entities, $entity59);

			$entity60 = new stdClass();
			$entity60->name = "Escuela Superior de Cómputo";
			$entity60->acronym = " ESCOM Zacatenco";
			$entity60->level = "Unidades Académicas de Nivel Superior";
			array_push($entities, $entity60);

			$entity61 = new stdClass();
			$entity61->name = "Unidad Profesional Interdisciplinaria de Ingeniería y Ciencias Sociales y Administrativas";
			$entity61->acronym = " UPIICSA ";
			$entity61->level = "Unidades Académicas de Nivel Superior";
			array_push($entities, $entity61);

			$entity62 = new stdClass();
			$entity62->name = "Unidad Profesional Interdisciplinaria de Ingeniería y Tecnologías Avanzadas";
			$entity62->acronym = " UPIITA ";
			$entity62->level = "Unidades Académicas de Nivel Superior";
			array_push($entities, $entity62);

			$entity63 = new stdClass();
			$entity63->name = "Unidad Profesional Interdisciplinaria de Biotecnología";
			$entity63->acronym = " UPIBI ";
			$entity63->level = "Unidades Académicas de Nivel Superior";
			array_push($entities, $entity63);

			$entity64 = new stdClass();
			$entity64->name = "Unidad Profesional Interdisciplinaria de Ingeniería";
			$entity64->acronym = " UPIIG Campus Guanajuato";
			$entity64->level = "Unidades Académicas de Nivel Superior";
			array_push($entities, $entity64);

			$entity65 = new stdClass();
			$entity65->name = "Unidad Profesional Interdisciplinaria de Ingeniería";
			$entity65->acronym = " UPIIZ Campus Zacatecas";
			$entity65->level = "Unidades Académicas de Nivel Superior";
			array_push($entities, $entity65);

			$entity66 = new stdClass();
			$entity66->name = "Escuela Nacional de Ciencias Biológicas";
			$entity66->acronym = " ENCB Zacatenco";
			$entity66->level = "Unidades Académicas de Nivel Superior";
			array_push($entities, $entity66);

			$entity67 = new stdClass();
			$entity67->name = "Escuela Superior de Medicina";
			$entity67->acronym = " ESM ";
			$entity67->level = "Unidades Académicas de Nivel Superior";
			array_push($entities, $entity67);

			$entity68 = new stdClass();
			$entity68->name = "Escuela Nacional de Medicina y Homeopatía";
			$entity68->acronym = " ENMH ";
			$entity68->level = "Unidades Académicas de Nivel Superior";
			array_push($entities, $entity68);

			$entity69 = new stdClass();
			$entity69->name = "Escuela Superior de Enfermería y Obstetricia";
			$entity69->acronym = " ESEO ";
			$entity69->level = "Unidades Académicas de Nivel Superior";
			array_push($entities, $entity69);

			$entity70 = new stdClass();
			$entity70->name = "Centro Interdisciplinario de Ciencias de la Salud";
			$entity70->acronym = " Milpa Alta";
			$entity70->level = "Unidades Académicas de Nivel Superior";
			array_push($entities, $entity70);

			$entity71 = new stdClass();
			$entity71->name = "Centro Interdisciplinario de Ciencias de la Salud";
			$entity71->acronym = " Santo Tomás";
			$entity71->level = "Unidades Académicas de Nivel Superior";
			array_push($entities, $entity71);

			$entity72 = new stdClass();
			$entity72->name = "Escuela Superior de Comercio y Administración";
			$entity72->acronym = " ESCA Santo Tomás";
			$entity72->level = "Unidades Académicas de Nivel Superior";
			array_push($entities, $entity72);

			$entity73 = new stdClass();
			$entity73->name = "Escuela Superior de Comercio y Administración";
			$entity73->acronym = " ESCA Tepepan";
			$entity73->level = "Unidades Académicas de Nivel Superior";
			array_push($entities, $entity73);

			$entity74 = new stdClass();
			$entity74->name = "Escuela Superior de Economía";
			$entity74->acronym = " ESE ";
			$entity74->level = "Unidades Académicas de Nivel Superior";
			array_push($entities, $entity74);

			$entity75 = new stdClass();
			$entity75->name = "Escuela Superior de Turismo";
			$entity75->acronym = " EST ";
			$entity75->level = "Unidades Académicas de Nivel Superior";
			array_push($entities, $entity75);

			$entity76 = new stdClass();
			$entity76->name = "Centro de Desarrollo de Productos Bióticos";
			$entity76->acronym = "CEPROBI";
			$entity76->level = "Unidades Académicas de Investigación Científica y Tecnológica";
			array_push($entities, $entity76);

			$entity77 = new stdClass();
			$entity77->name = "Centro Interdisciplinario de Ciencias Marinas";
			$entity77->acronym = "CICIMAR";
			$entity77->level = "Unidades Académicas de Investigación Científica y Tecnológica";
			array_push($entities, $entity77);

			$entity78 = new stdClass();
			$entity78->name = "Centro Interdisciplinario de Investigación para el Desarrollo Integral Regional";
			$entity78->acronym = "CIIDIR Durango";
			$entity78->level = "Unidades Académicas de Investigación Científica y Tecnológica";
			array_push($entities, $entity78);

			$entity79 = new stdClass();
			$entity79->name = "Centro Interdisciplinario de Investigación para el Desarrollo Integral Regional";
			$entity79->acronym = "CIIDIR Michoacán";
			$entity79->level = "Unidades Académicas de Investigación Científica y Tecnológica";
			array_push($entities, $entity79);

			$entity80 = new stdClass();
			$entity80->name = "Centro Interdisciplinario de Investigación para el Desarrollo Integral Regional";
			$entity80->acronym = "CIIDIR Oaxaca";
			$entity80->level = "Unidades Académicas de Investigación Científica y Tecnológica";
			array_push($entities, $entity80);

			$entity81 = new stdClass();
			$entity81->name = "Centro Interdisciplinario de Investigación para el Desarrollo Integral Regional";
			$entity81->acronym = "CIIDIR Sinaloa";
			$entity81->level = "Unidades Académicas de Investigación Científica y Tecnológica";
			array_push($entities, $entity81);

			$entity82 = new stdClass();
			$entity82->name = "Centro Interdisciplinario de Investigaciones y Estudios Sobre Medio Ambiente y Desarrollo";
			$entity82->acronym = "CIIEMAD";
			$entity82->level = "Unidades Académicas de Investigación Científica y Tecnológica";
			array_push($entities, $entity82);

			$entity83 = new stdClass();
			$entity83->name = "Centro de Investigación en Computación";
			$entity83->acronym = "CIC Zacatenco";
			$entity83->level = "Unidades Académicas de Investigación Científica y Tecnológica";
			array_push($entities, $entity83);

			$entity84 = new stdClass();
			$entity84->name = "Centro de Investigaciones Económicas Administrativas y Sociales";
			$entity84->acronym = "CIECAS";
			$entity84->level = "Unidades Académicas de Investigación Científica y Tecnológica";
			array_push($entities, $entity84);

			$entity85 = new stdClass();
			$entity85->name = "Centro de Biotecnología Genómica";
			$entity85->acronym = "CBG";
			$entity85->level = "Unidades Académicas de Investigación Científica y Tecnológica";
			array_push($entities, $entity85);

			$entity86 = new stdClass();
			$entity86->name = "Centro de Investigación en Ciencia Aplicada y Tecnología Avanzada";
			$entity86->acronym = "CICATA Legaria";
			$entity86->level = "Unidades Académicas de Investigación Científica y Tecnológica";
			array_push($entities, $entity86);

			$entity87 = new stdClass();
			$entity87->name = "Centro de Investigación en Ciencia Aplicada y Tecnología Avanzada";
			$entity87->acronym = "CICATA Querétaro";
			$entity87->level = "Unidades Académicas de Investigación Científica y Tecnológica";
			array_push($entities, $entity87);

			$entity88 = new stdClass();
			$entity88->name = "Centro de Investigación en Ciencia Aplicada y Tecnología Avanzada";
			$entity88->acronym = "CICATA Altamira";
			$entity88->level = "Unidades Académicas de Investigación Científica y Tecnológica";
			array_push($entities, $entity88);

			$entity89 = new stdClass();
			$entity89->name = "Centro de Investigación en Biotecnología Aplicada";
			$entity89->acronym = "CIBA Tlaxcala";
			$entity89->level = "Unidades Académicas de Investigación Científica y Tecnológica";
			array_push($entities, $entity89);

			$entity90 = new stdClass();
			$entity90->name = "Centro de Investigación y Desarrollo en Tecnología Digital";
			$entity90->acronym = "CITEDI";
			$entity90->level = "Unidades Académicas de Investigación Científica y Tecnológica";
			array_push($entities, $entity90);

			$entity91 = new stdClass();
			$entity91->name = "Centro de Innovación y Desarrollo Tecnológico en Cómputo";
			$entity91->acronym = "CIDETEC Zacatenco";
			$entity91->level = "Unidades Académicas de Investigación Científica y Tecnológica";
			array_push($entities, $entity91);

			$entity92 = new stdClass();
			$entity92->name = "Centro de Investigación e Innovación Tecnológica";
			$entity92->acronym = "CIITEC";
			$entity92->level = "Unidades Académicas de Investigación Científica y Tecnológica";
			array_push($entities, $entity92);

			$entity93 = new stdClass();
			$entity93->name = "Centro Mexicano para la Producción más Limpia";
			$entity93->acronym = "CMP+L";
			$entity93->level = "Unidades Académicas de Investigación Científica y Tecnológica";
			array_push($entities, $entity93);

			$entity94 = new stdClass();
			$entity94->name = "Centro Regional para la Producción más Limpia";
			$entity94->acronym = "CRP+L";
			$entity94->level = "Unidades Académicas de Investigación Científica y Tecnológica";
			array_push($entities, $entity94);

			$entity95 = new stdClass();
			$entity95->name = "Centro de Nanociencias y Micro y NanoTecnologías";
			$entity95->acronym = "CNMN";
			$entity95->level = "Unidades de Apoyo a la Investigación, al Desarrollo y Fomento Tecnológico y Empresarial";
			array_push($entities, $entity95);

			$entity96 = new stdClass();
			$entity96->name = "Centro de Educación Continua";
			$entity96->acronym = "CEC Allende";
			$entity96->level = "Unidades Académicas de Educación Continua";
			array_push($entities, $entity96);

			$entity97 = new stdClass();
			$entity97->name = "Centro de Educación Continua";
			$entity97->acronym = "CEC Campeche";
			$entity97->level = "Unidades Académicas de Educación Continua";
			array_push($entities, $entity97);

			$entity98 = new stdClass();
			$entity98->name = "Centro de Educación Continua";
			$entity98->acronym = "CEC Cancún";
			$entity98->level = "Unidades Académicas de Educación Continua";
			array_push($entities, $entity98);

			$entity99 = new stdClass();
			$entity99->name = "Centro de Educación Continua";
			$entity99->acronym = "CEC Culiacán";
			$entity99->level = "Unidades Académicas de Educación Continua";
			array_push($entities, $entity99);

			$entity100 = new stdClass();
			$entity100->name = "Centro de Educación Conitnua";
			$entity100->acronym = "CEC Los Mochis";
			$entity100->level = "Unidades Académicas de Educación Continua";
			array_push($entities, $entity100);

			$entity101 = new stdClass();
			$entity101->name = "Centro de Educación Continua";
			$entity101->acronym = "CEC Mazatlán";
			$entity101->level = "Unidades Académicas de Educación Continua";
			array_push($entities, $entity101);

			$entity102 = new stdClass();
			$entity102->name = "Centro de Educación Continua";
			$entity102->acronym = "CEC Morelia";
			$entity102->level = "Unidades Académicas de Educación Continua";
			array_push($entities, $entity102);

			$entity103 = new stdClass();
			$entity103->name = "Centro de Educación Continua";
			$entity103->acronym = "CEC Oaxaca";
			$entity103->level = "Unidades Académicas de Educación Continua";
			array_push($entities, $entity103);

			$entity104 = new stdClass();
			$entity104->name = "Centro de Educación Continua";
			$entity104->acronym = "CEC Reynosa";
			$entity104->level = "Unidades Académicas de Educación Continua";
			array_push($entities, $entity104);

			$entity105 = new stdClass();
			$entity105->name = "Centro de Educación Continua";
			$entity105->acronym = "CEC Tampico";
			$entity105->level = "Unidades Académicas de Educación Continua";
			array_push($entities, $entity105);

			$entity106 = new stdClass();
			$entity106->name = "Centro de Educación Continua";
			$entity106->acronym = "CEC Tijuana";
			$entity106->level = "Unidades Académicas de Educación Continua";
			array_push($entities, $entity106);

			$entity107 = new stdClass();
			$entity107->name = "Centro de Educación Continua";
			$entity107->acronym = "CEC Tlaxcala";
			$entity107->level = "Unidades Académicas de Educación Continua";
			array_push($entities, $entity107);

			$entity108 = new stdClass();
			$entity108->name = "Centro de Difusión de Ciencia y Tecnología";
			$entity108->acronym = "CDCyT";
			$entity108->level = "Unidades Académicas de Apoyo Educativo";
			array_push($entities, $entity108);

			$entity109 = new stdClass();
			$entity109->name = "Centro de Lenguas Extranjeras";
			$entity109->acronym = "CENLEX Zacatenco";
			$entity109->level = "Unidades Académicas de Apoyo Educativo";
			array_push($entities, $entity109);

			$entity110 = new stdClass();
			$entity110->name = "Centro de Lenguas Extranjeras";
			$entity110->acronym = "CENLEX Santo Tomás";
			$entity110->level = "Unidades Académicas de Apoyo Educativo";
			array_push($entities, $entity110);

			$entity111 = new stdClass();
			$entity111->name = "Centro de Formación e Innovación Educativa";
			$entity111->acronym = " CFIE Zacatenco";
			$entity111->level = "Unidades de Apoyo a la Innovación Educativa";
			array_push($entities, $entity111);

			$entity112 = new stdClass();
			$entity112->name = "Unidad Politécnica para la Educación Virtual";
			$entity112->acronym = " UPEV Zacatenco";
			$entity112->level = "Unidades de Apoyo a la Innovación Educativa";
			array_push($entities, $entity112);

			$entity113 = new stdClass();
			$entity113->name = "Centro de Incubación de Empresas de Base Tecnológica";
			$entity113->acronym = "POLI-INCUBA";
			$entity113->level = "Unidades de Apoyo a la Investigación, al Desarrollo y Fomento Tecnológico y Empresarial";
			array_push($entities, $entity113);

			$entity114 = new stdClass();
			$entity114->name = "Unidad Politécnica para el Desarrollo y la Competitividad Empresarial";
			$entity114->acronym = "UPDCE";
			$entity114->level = "Unidades de Apoyo a la Investigación, al Desarrollo y Fomento Tecnológico y Empresarial";
			array_push($entities, $entity114);

			$entity115 = new stdClass();
			$entity115->name = "Unidad de Desarrollo Tecnológico";
			$entity115->acronym = "TECHNO-POLI Zacatenco";
			$entity115->level = "Unidades de Apoyo a la Investigación, al Desarrollo y Fomento Tecnológico y Empresarial";
			array_push($entities, $entity115);

			$entity116 = new stdClass();
			$entity116->name = "Coordinación General de Formación e Innovación Educativa";
			$entity116->acronym = "CGFIE";
			$entity116->level = "Unidades de Apoyo a la Innovación Educativa";
			array_push($entities, $entity116);

			$entity117 = new stdClass();
			$entity117->name = "Centro de Estudios Científicos y Tecnológicos No 16";
			$entity117->acronym = "CECyT No. 16 Hidalgo";
			$entity117->level = "Unidades Académicas de Nivel Medio Superior";
			array_push($entities, $entity117);

			$entity118 = new stdClass();
			$entity118->name = "Centro de Investigación en Ciencia Aplicada y Tecnología Avanzada";
			$entity118->acronym = "CICATA Morelos";
			$entity118->level = "Unidades Académicas de Investigación Científica y Tecnológica";
			array_push($entities, $entity118);

			$entity119 = new stdClass();
			$entity119->name = "Centro de Educación Continua";
			$entity119->acronym = "CEC Cajeme";
			$entity119->level = "Unidades Académicas de Educación Continua";
			array_push($entities, $entity119);

			$entity120 = new stdClass();
			$entity120->name = "Centro de Educación Continua";
			$entity120->acronym = "CEC Morelos";
			$entity120->level = "Unidades Académicas de Educación Continua";
			array_push($entities, $entity120);

			return $entities;
	    	
	    }

	}