create procedure paListaMenu(id int)
begin
	select  p.nombres, p.apellidos, p.dni, p.dni, c.cargo_desc, pu.perfil_desc, m.menu_nomb, m.menu_slug, m.menu_orden, m.menu_img from personas p
	inner join cargos c on p.cargo_id = c.id_cargo
	inner join perfil_users pu on c.perfil_user_id = pu.id_perfil_user
	inner join menu_perfiles mp on pu.id_perfil_user = mp.perfil_user_id
	inner join menus m on mp.menu_id = m.id_menu
	where p.id_persona = id;
END


call paListaMenu(1)