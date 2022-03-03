-- pending_order_HST_TRANSFER







-- motor
SELECT  po.id, 
		po.nombre,
        po.apellido,
        po.id_type,
        po.identificacion,
        po.dia,
        po.mes,
        po.year,
        po.genero,
        po.estado_civil,
        po.pais,
        po.celular,
        po.contactMail,
        p.Nombre_Provincia,
        d.nombre_distrito,
        c.nombre_corregimiento,
        po.barrio,
        po.casa,
        po.ppe,
        po.ppe_cargo,
        po.ppe_inicio_dia,
        po.ppe_inicio_mes,
        po.ppe_inicio_year,
        po.ppe_fin_dia,
        po.ppe_fin_mes,
        po.ppe_fin_year,
        po.ppe_mail,
        po.placa,
        cm.Marca,
        ct.Tipo,
        po.car_year,
        po.numero_de_chasis,
        po.numero_de_motor,        
        pm.html
FROM easyd0a3_DB.Pending_orders_Hst po
INNER JOIN easyd0a3_DB.Planes_Motores pm on pm.tipo = po.info_tipo_id and pm.aseguradora = po.info_aseguradora_id and pm.plan = po.info_plan_id
INNER JOIN easyd0a3_DB.Provincia p on po.provincia = p.id_Provincia
INNER JOIN easyd0a3_DB.Distrito d on po.distrito = d.id_distrito
INNER JOIN easyd0a3_DB.Corregimiento c on po.corregimiento = c.id_corregimiento
INNER JOIN easyd0a3_DB.Carro_Marca cm on po.marca = cm.id
INNER JOIN easyd0a3_DB.Carro_Tipo ct on po.modelo = ct.id
WHERE po.id = orderNumber;


