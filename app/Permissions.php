<?php

namespace App;

//
//
/*username: username,*/
/*vistaAdmin:vistaAdmin,*/
/*editarTrab:editarTrab,*/
/*vistaMercancia:vistaMercancia,*/
/*vistaContenedores:vistaContenedores,*/
/*vistaVentas:vistaVentas,*/
/*editarProd: editarProd,*/
/*editarUSD:editarUSD,*/
/*vistaPrestamos:vistaPrestamos*/
// create read edit delete
// products
// productstock
// productoperations
// bills
// billstock
// billoperations
// users
// subsidiaries
enum Permissions: string
{
    case editarTrab = 'editarTrab';
    case vistaMercancia = 'vistaMercancia';
    case vistaContenedores = 'vistaContenedores';
    case vistaVentas = 'vistaVentas';
    case editarProd = 'editarProd';
    case editarUSD = 'editarUSD';
    case vistaPrestamos = 'vistaPrestamos';
    case vistaAdmin = 'vistaAdmin';
    case vistaAlmacen = 'vistaAlmacen';
}

/*case rp = 'rp';*/
/*case ep = 'ep';*/
/*case dp = 'dp';*/
/*case cp = 'cp';*/
/**/
/*case rpo = 'rpo';*/
/*case epo = 'epo';*/
/*case dpo = 'dpo';*/
/*case cpo = 'cpo';*/
/**/
/*case rps = 'rps';*/
/*case eps = 'eps';*/
/*case dps = 'dps';*/
/*case cps = 'cps';*/
/**/
/*case rbo = 'rbo';*/
/*case ebo = 'ebo';*/
/*case dbo = 'dbo';*/
/*case cbo = 'cbo';*/
/**/
/*case rbs = 'rbs';*/
/*case ebs = 'ebs';*/
/*case dbs = 'dbs';*/
/*case cbs = 'cbs';*/
/**/
/*case ru = 'ru';*/
/*case eu = 'eu';*/
/*case du = 'du';*/
/*case cu = 'cu';*/
/**/
/*case rdo = 'rdo';*/
/*case edo = 'edo';*/
/*case ddo = 'ddo';*/
/*case cdo = 'cdo';*/
/**/
/*case rds = 'rds';*/
/*case eds = 'eds';*/
/*case dds = 'dds';*/
/*case cds = 'cds';*/
/**/
/*case rs = 'rs';*/
/*case es = 'es';*/
/*case ds = 'ds';*/
/*case cs = 'cs';*/
