<?php
// Copyright (C) 2010-2012 Combodo SARL
//
//   This file is part of iTop.
//
//   iTop is free software; you can redistribute it and/or modify	
//   it under the terms of the GNU Affero General Public License as published by
//   the Free Software Foundation, either version 3 of the License, or
//   (at your option) any later version.
//
//   iTop is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU Affero General Public License for more details.
//
//   You should have received a copy of the GNU Affero General Public License
//   along with iTop. If not, see <http://www.gnu.org/licenses/>

/**
 * @copyright   Copyright (C) 2010-2012 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:Organization' => 'Organizzazione',
	'Class:Organization+' => '',
	'Class:Organization/Attribute:name' => 'Cognome',
	'Class:Organization/Attribute:name+' => 'Nome',
	'Class:Organization/Attribute:code' => 'Codice',
	'Class:Organization/Attribute:code+' => 'Codice dell\'organizzazione (Siret, DUNS,...)',
	'Class:Organization/Attribute:status' => 'Stato',
	'Class:Organization/Attribute:status+' => '',
	'Class:Organization/Attribute:status/Value:active' => 'Attivo',
	'Class:Organization/Attribute:status/Value:active+' => 'Attivo',
	'Class:Organization/Attribute:status/Value:inactive' => 'Inattivo',
	'Class:Organization/Attribute:status/Value:inactive+' => 'Inattivo',
	'Class:Organization/Attribute:parent_id' => 'Parent',
	'Class:Organization/Attribute:parent_id+' => 'Parent organization',
	'Class:Location' => 'Localizzazione',
	'Class:Location+' => 'Qualsiasi tipo di localizzazione: Regione, Paese, Città, Sito, Edificio, Piano, Stanza, Rack,,...',
	'Class:Location/Attribute:name' => 'Nome',
	'Class:Location/Attribute:name+' => '',
	'Class:Location/Attribute:status' => 'Stato',
	'Class:Location/Attribute:status+' => '',
	'Class:Location/Attribute:status/Value:active' => 'Attivo',
	'Class:Location/Attribute:status/Value:active+' => 'Attivo',
	'Class:Location/Attribute:status/Value:inactive' => 'Inattivo',
	'Class:Location/Attribute:status/Value:inactive+' => 'Inattivo',
	'Class:Location/Attribute:org_id' => 'Organizzazione proprietaria',
	'Class:Location/Attribute:org_id+' => '',
	'Class:Location/Attribute:address' => 'Indirizzo',
	'Class:Location/Attribute:address+' => 'Indirizzo postale',
	'Class:Location/Attribute:postal_code' => 'Codice avviamento postale',
	'Class:Location/Attribute:postal_code+' => 'CAP/codice avviamento postale',
	'Class:Location/Attribute:city' => 'Città',
	'Class:Location/Attribute:city+' => '',
	'Class:Location/Attribute:country' => 'Paese',
	'Class:Location/Attribute:country+' => '',
	'Class:Location/Attribute:parent_id' => 'Parent location',
	'Class:Location/Attribute:parent_id+' => '',
	'Class:Location/Attribute:contact_list' => 'Contatti',
	'Class:Location/Attribute:contact_list+' => 'Contatti posizionati su questo sito',
	'Class:Location/Attribute:infra_list' => 'Infrastrutture',
	'Class:Location/Attribute:infra_list+' => 'CIs posizionati su questo sito',
	'Class:Person' => 'Persona',
	'Class:Person+' => '',
	'Class:Person/Attribute:first_name' => 'Nome',
	'Class:Person/Attribute:first_name+' => '',
	'Class:Person/Attribute:employee_id' => 'ID dipendente',
	'Class:Person/Attribute:employee_id+' => '',
	'Class:Team' => 'Squadra',
	'Class:Team+' => '',
	'Class:Team/Attribute:member_list' => 'Membri',
	'Class:Team/Attribute:member_list+' => 'Contatti che appartengono a questa Squadra',
	'Class:lnkTeamToContact' => 'Membri della squadra',
	'Class:lnkTeamToContact+' => 'membri della squadra',
	'Class:lnkTeamToContact/Attribute:team_id' => 'Squadra',
	'Class:lnkTeamToContact/Attribute:team_id+' => '',
	'Class:lnkTeamToContact/Attribute:contact_id' => 'Membri',
	'Class:lnkTeamToContact/Attribute:contact_id+' => '',
	'Class:lnkTeamToContact/Attribute:role' => 'Ruolo',
	'Class:lnkTeamToContact/Attribute:role+' => '',
	'Class:WebDoc' => 'Documento Web',
	'Class:WebDoc+' => 'Documento disponibile su un altro server web',
	'Class:WebDoc/Attribute:url' => 'Url',
	'Class:WebDoc/Attribute:url+' => '',
	'Class:Note' => 'Note',
	'Class:Note+' => '',
	'Class:Note/Attribute:note' => 'Testo',
	'Class:Note/Attribute:note+' => '',
	'Class:FileDoc' => 'Documento (file)',
	'Class:FileDoc+' => '',
	'Class:FileDoc/Attribute:contents' => 'Contenuti',
	'Class:FileDoc/Attribute:contents+' => '',
	'Class:Licence' => 'Licenza',
	'Class:Licence+' => '',
	'Class:Licence/Attribute:provider' => 'Provider',
	'Class:Licence/Attribute:provider+' => '',
	'Class:Licence/Attribute:org_id' => 'Proprietario',
	'Class:Licence/Attribute:org_id+' => '',
	'Class:Licence/Attribute:product' => 'Prodotto',
	'Class:Licence/Attribute:product+' => '',
	'Class:Licence/Attribute:name' => 'Nome',
	'Class:Licence/Attribute:name+' => '',
	'Class:Licence/Attribute:start' => 'Data di inizio',
	'Class:Licence/Attribute:start+' => '',
	'Class:Licence/Attribute:end' => 'Data di fine',
	'Class:Licence/Attribute:end+' => '',
	'Class:Licence/Attribute:licence_key' => 'Key',
	'Class:Licence/Attribute:licence_key+' => '',
	'Class:Licence/Attribute:scope' => 'Scopo',
	'Class:Licence/Attribute:scope+' => '',
	'Class:Licence/Attribute:usage_limit' => 'Limiti d\'uso',
	'Class:Licence/Attribute:usage_limit+' => '',
	'Class:Licence/Attribute:usage_list' => 'Uso',
	'Class:Licence/Attribute:usage_list+' => 'Istanze di applicazioni che usano questa licenza',
	'Class:Subnet' => 'Subnet',
	'Class:Subnet+' => '',
	'Class:Subnet/Attribute:description' => 'Descrizione',
	'Class:Subnet/Attribute:description+' => '',
	'Class:Subnet/Attribute:org_id' => 'Organizzazione proprietaria',
	'Class:Subnet/Attribute:org_id+' => '',
	'Class:Subnet/Attribute:ip' => 'IP',
	'Class:Subnet/Attribute:ip+' => '',
	'Class:Subnet/Attribute:ip_mask' => 'IP Mask',
	'Class:Subnet/Attribute:ip_mask+' => '',
	'Class:Patch' => 'Patch',
	'Class:Patch+' => '',
	'Class:Patch/Attribute:name' => 'Nome',
	'Class:Patch/Attribute:name+' => '',
	'Class:Patch/Attribute:description' => 'Descrizione',
	'Class:Patch/Attribute:description+' => '',
	'Class:Patch/Attribute:target_sw' => 'Scopo dell\'applicazione',
	'Class:Patch/Attribute:target_sw+' => 'Software bersaglio (OS o applicazione)',
	'Class:Patch/Attribute:version' => 'Versione',
	'Class:Patch/Attribute:version+' => '',
	'Class:Patch/Attribute:type' => 'Tipo',
	'Class:Patch/Attribute:type+' => '',
	'Class:Patch/Attribute:type/Value:application' => 'Applicazione',
	'Class:Patch/Attribute:type/Value:application+' => '',
	'Class:Patch/Attribute:type/Value:os' => 'OS',
	'Class:Patch/Attribute:type/Value:os+' => '',
	'Class:Patch/Attribute:type/Value:security' => 'Securirezza',
	'Class:Patch/Attribute:type/Value:security+' => '',
	'Class:Patch/Attribute:type/Value:servicepack' => 'Service Pack',
	'Class:Patch/Attribute:type/Value:servicepack+' => '',
	'Class:Patch/Attribute:ci_list' => 'Dispositivi',
	'Class:Patch/Attribute:ci_list+' => 'Dispositivi dove la patch è installata',
	'Class:Application' => 'Applicazione',
	'Class:Application+' => '',
	'Class:Application/Attribute:instance_list' => 'Installazioni',
	'Class:Application/Attribute:instance_list+' => 'Istanze di questa applicazione',
	'Class:DBServer' => 'Database',
	'Class:DBServer+' => 'Database server SW',
	'Class:DBServer/Attribute:instance_list' => 'Installazioni',
	'Class:DBServer/Attribute:instance_list+' => 'Istanze di questo database server',
	'Class:lnkPatchToCI' => 'Utilizzo di Patch',
	'Class:lnkPatchToCI+' => '',
	'Class:lnkPatchToCI/Attribute:patch_id' => 'Patch',
	'Class:lnkPatchToCI/Attribute:patch_id+' => '',
	'Class:lnkPatchToCI/Attribute:ci_id' => 'CI',
	'Class:lnkPatchToCI/Attribute:ci_id+' => '',
	'Class:DBServerInstance' => 'Istanza del DB Server',
	'Class:DBServerInstance+' => '',
	'Class:DBServerInstance/Attribute:software_id' => 'Software',
	'Class:DBServerInstance/Attribute:software_id+' => '',
	'Class:DBServerInstance/Attribute:dbinstance_list' => 'Databases',
	'Class:DBServerInstance/Attribute:dbinstance_list+' => 'Sorgente del database',
	'Class:ApplicationInstance' => 'Istanza dell\'applicazione',
	'Class:ApplicationInstance+' => '',
	'Class:ApplicationInstance/Attribute:software_id' => 'Software',
	'Class:ApplicationInstance/Attribute:software_id+' => '',
	'Class:DatabaseInstance' => 'Istanza del database',
	'Class:DatabaseInstance+' => '',
	'Class:DatabaseInstance/Attribute:db_server_instance_id' => 'Server del database',
	'Class:DatabaseInstance/Attribute:db_server_instance_id+' => '',
	'Class:DatabaseInstance/Attribute:description' => 'Descrizione',
	'Class:DatabaseInstance/Attribute:description+' => '',
	'Class:Group' => 'Groppo',
	'Class:Group+' => '',
	'Class:Group/Attribute:name' => 'Nome',
	'Class:Group/Attribute:name+' => '',
	'Class:Group/Attribute:status' => 'Stato',
	'Class:Group/Attribute:status+' => '',
	'Class:Group/Attribute:status/Value:implementation' => 'Implementazione',
	'Class:Group/Attribute:status/Value:implementation+' => 'Implementazione',
	'Class:Group/Attribute:status/Value:obsolete' => 'Obsoleto',
	'Class:Group/Attribute:status/Value:obsolete+' => 'Obsoleto',
	'Class:Group/Attribute:status/Value:production' => 'Produzione',
	'Class:Group/Attribute:status/Value:production+' => 'Produzione',
	'Class:Group/Attribute:org_id' => 'Organizazione',
	'Class:Group/Attribute:org_id+' => '',
	'Class:Group/Attribute:description' => 'Descrizione',
	'Class:Group/Attribute:description+' => '',
	'Class:Group/Attribute:type' => 'Tipo',
	'Class:Group/Attribute:type+' => '',
	'Class:Group/Attribute:parent_id' => 'Parent Group',
	'Class:Group/Attribute:parent_id+' => '',
	'Class:Group/Attribute:ci_list' => 'CIs collegati',
	'Class:Group/Attribute:ci_list+' => '',
	'Class:lnkGroupToCI' => 'Groppo / CI',
	'Class:lnkGroupToCI+' => '',
	'Class:lnkGroupToCI/Attribute:group_id' => 'Groppo',
	'Class:lnkGroupToCI/Attribute:group_id+' => '',
	'Class:lnkGroupToCI/Attribute:ci_id' => 'CI',
	'Class:lnkGroupToCI/Attribute:ci_id+' => '',
	'Class:lnkGroupToCI/Attribute:reason' => 'Motivo',
	'Class:lnkGroupToCI/Attribute:reason+' => '',
	'Class:ApplicationSolution' => 'Soluzione Applicativa',
	'Class:ApplicationSolution+' => '',
	'Class:ApplicationSolution/Attribute:description' => 'Descrizione',
	'Class:ApplicationSolution/Attribute:description+' => '',
	'Class:ApplicationSolution/Attribute:ci_list' => 'CIs',
	'Class:ApplicationSolution/Attribute:ci_list+' => 'CIs che compongono la soluzione applicativa',
	'Class:ApplicationSolution/Attribute:process_list' => 'Processi di business',
	'Class:ApplicationSolution/Attribute:process_list+' => 'Processi di business che si basano sulla soluzione',
	'Class:BusinessProcess' => 'Processi di business',
	'Class:BusinessProcess+' => '',
	'Class:BusinessProcess/Attribute:description' => 'Descrizione',
	'Class:BusinessProcess/Attribute:description+' => '',
	'Class:BusinessProcess/Attribute:used_solution_list' => 'Soluzioni Applicative',
	'Class:BusinessProcess/Attribute:used_solution_list+' => 'Soluzioni applicative sui cui si basa il processo',
	'Class:NetworkInterface' => 'Interfaccia di Rete',
	'Class:NetworkInterface+' => '',
	'Class:NetworkInterface/Attribute:device_id' => 'Dispositivo',
	'Class:NetworkInterface/Attribute:device_id+' => '',
	'Class:NetworkInterface/Attribute:logical_type' => 'Logical Type',
	'Class:NetworkInterface/Attribute:logical_type+' => '',
	'Class:NetworkInterface/Attribute:logical_type/Value:backup' => 'Backup',
	'Class:NetworkInterface/Attribute:logical_type/Value:backup+' => '',
	'Class:NetworkInterface/Attribute:logical_type/Value:logical' => 'Logical',
	'Class:NetworkInterface/Attribute:logical_type/Value:logical+' => '',
	'Class:NetworkInterface/Attribute:logical_type/Value:port' => 'Porta',
	'Class:NetworkInterface/Attribute:logical_type/Value:port+' => '',
	'Class:NetworkInterface/Attribute:logical_type/Value:primary' => 'Primario',
	'Class:NetworkInterface/Attribute:logical_type/Value:primary+' => '',
	'Class:NetworkInterface/Attribute:logical_type/Value:secondary' => 'Secondario',
	'Class:NetworkInterface/Attribute:logical_type/Value:secondary+' => '',
	'Class:NetworkInterface/Attribute:physical_type' => 'Tipo fisico',
	'Class:NetworkInterface/Attribute:physical_type+' => '',
	'Class:NetworkInterface/Attribute:physical_type/Value:atm' => 'ATM',
	'Class:NetworkInterface/Attribute:physical_type/Value:atm+' => '',
	'Class:NetworkInterface/Attribute:physical_type/Value:ethernet' => 'Ethernet',
	'Class:NetworkInterface/Attribute:physical_type/Value:ethernet+' => '',
	'Class:NetworkInterface/Attribute:physical_type/Value:framerelay' => 'Frame Relay',
	'Class:NetworkInterface/Attribute:physical_type/Value:framerelay+' => '',
	'Class:NetworkInterface/Attribute:physical_type/Value:vlan' => 'VLAN',
	'Class:NetworkInterface/Attribute:physical_type/Value:vlan+' => '',
	'Class:NetworkInterface/Attribute:ip_address' => 'Indirizzo IP',
	'Class:NetworkInterface/Attribute:ip_address+' => '',
	'Class:NetworkInterface/Attribute:ip_mask' => 'Maschera IP',
	'Class:NetworkInterface/Attribute:ip_mask+' => '',
	'Class:NetworkInterface/Attribute:mac_address' => 'Indirizzo MAC',
	'Class:NetworkInterface/Attribute:mac_address+' => '',
	'Class:NetworkInterface/Attribute:speed' => 'Velocità',
	'Class:NetworkInterface/Attribute:speed+' => '',
	'Class:NetworkInterface/Attribute:duplex' => 'Duplex',
	'Class:NetworkInterface/Attribute:duplex+' => '',
	'Class:NetworkInterface/Attribute:duplex/Value:auto' => 'Auto',
	'Class:NetworkInterface/Attribute:duplex/Value:auto+' => 'Auto',
	'Class:NetworkInterface/Attribute:duplex/Value:full' => 'Full',
	'Class:NetworkInterface/Attribute:duplex/Value:full+' => '',
	'Class:NetworkInterface/Attribute:duplex/Value:half' => 'Half',
	'Class:NetworkInterface/Attribute:duplex/Value:half+' => '',
	'Class:NetworkInterface/Attribute:duplex/Value:unknown' => 'Sconosciuta',
	'Class:NetworkInterface/Attribute:duplex/Value:unknown+' => '',
	'Class:NetworkInterface/Attribute:connected_if' => 'Connesso a ',
	'Class:NetworkInterface/Attribute:connected_if+' => 'Interfaccia connessa',
	'Class:NetworkInterface/Attribute:link_type' => 'Tipo di link',
	'Class:NetworkInterface/Attribute:link_type+' => '',
	'Class:NetworkInterface/Attribute:link_type/Value:downlink' => 'Down link',
	'Class:NetworkInterface/Attribute:link_type/Value:downlink+' => '',
	'Class:NetworkInterface/Attribute:link_type/Value:uplink' => 'Up link',
	'Class:NetworkInterface/Attribute:link_type/Value:uplink+' => '',
	'Class:PC' => 'PC',
	'Class:PC+' => '',
	'Class:PC/Attribute:cpu' => 'CPU',
	'Class:PC/Attribute:cpu+' => '',
	'Class:PC/Attribute:ram' => 'RAM',
	'Class:PC/Attribute:ram+' => '',
	'Class:PC/Attribute:hdd' => 'Hard disk',
	'Class:PC/Attribute:hdd+' => '',
	'Class:PC/Attribute:os_family' => 'OS Family',
	'Class:PC/Attribute:os_family+' => '',
	'Class:PC/Attribute:os_version' => 'OS Version',
	'Class:PC/Attribute:os_version+' => '',
	'Class:PC/Attribute:application_list' => 'Applicazioni',
	'Class:PC/Attribute:application_list+' => 'Applicazioni installate su questo PC',
	'Class:PC/Attribute:patch_list' => 'Patches',
	'Class:PC/Attribute:patch_list+' => 'Patches installate su questo PC',
	'Class:MobilePhone' => 'Cellulari',
	'Class:MobilePhone+' => '',
	'Class:MobilePhone/Attribute:number' => 'Numero di telefono',
	'Class:MobilePhone/Attribute:number+' => '',
	'Class:MobilePhone/Attribute:imei' => 'IMEI',
	'Class:MobilePhone/Attribute:imei+' => '',
	'Class:MobilePhone/Attribute:hw_pin' => 'Hardware PIN',
	'Class:MobilePhone/Attribute:hw_pin+' => '',
	'Class:NetworkDevice' => 'Dispositivi di rete',
	'Class:NetworkDevice+' => '',
	'Class:NetworkDevice/Attribute:type' => 'Tipo',
	'Class:NetworkDevice/Attribute:type+' => '',
	'Class:NetworkDevice/Attribute:type/Value:firewall' => 'Firewall',
	'Class:NetworkDevice/Attribute:type/Value:firewall+' => '',
	'Class:NetworkDevice/Attribute:type/Value:hub' => 'Hub',
	'Class:NetworkDevice/Attribute:type/Value:hub+' => '',
	'Class:NetworkDevice/Attribute:type/Value:loadbalancer' => 'Load Balancer',
	'Class:NetworkDevice/Attribute:type/Value:loadbalancer+' => '',
	'Class:NetworkDevice/Attribute:type/Value:router' => 'Router',
	'Class:NetworkDevice/Attribute:type/Value:router+' => '',
	'Class:NetworkDevice/Attribute:type/Value:switch' => 'Switch',
	'Class:NetworkDevice/Attribute:type/Value:switch+' => '',
	'Class:NetworkDevice/Attribute:type/Value:wanaccelerator' => 'Acceleratore WAN',
	'Class:NetworkDevice/Attribute:type/Value:wanaccelerator+' => '',
	'Class:NetworkDevice/Attribute:ios_version' => 'Versione IOS',
	'Class:NetworkDevice/Attribute:ios_version+' => '',
	'Class:NetworkDevice/Attribute:ram' => 'RAM',
	'Class:NetworkDevice/Attribute:ram+' => '',
	'Class:NetworkDevice/Attribute:snmp_read' => 'SNMP Read',
	'Class:NetworkDevice/Attribute:snmp_read+' => '',
	'Class:NetworkDevice/Attribute:snmp_write' => 'SNMP Write',
	'Class:NetworkDevice/Attribute:snmp_write+' => '',
	'Class:Server' => 'Server',
	'Class:Server+' => '',
	'Class:Server/Attribute:cpu' => 'CPU',
	'Class:Server/Attribute:cpu+' => '',
	'Class:Server/Attribute:ram' => 'RAM',
	'Class:Server/Attribute:ram+' => '',
	'Class:Server/Attribute:hdd' => 'Hard Disk',
	'Class:Server/Attribute:hdd+' => '',
	'Class:Server/Attribute:os_family' => 'OS Family',
	'Class:Server/Attribute:os_family+' => '',
	'Class:Server/Attribute:os_version' => 'OS Version',
	'Class:Server/Attribute:os_version+' => '',
	'Class:Server/Attribute:application_list' => 'Applicazioni',
	'Class:Server/Attribute:application_list+' => 'Applicazioni installate su questo server',
	'Class:Server/Attribute:patch_list' => 'Patches',
	'Class:Server/Attribute:patch_list+' => 'Patches installate su questo server',
	'Class:Printer' => 'Stampante',
	'Class:Printer+' => '',
	'Class:Printer/Attribute:type' => 'Tipo',
	'Class:Printer/Attribute:type+' => '',
	'Class:Printer/Attribute:type/Value:mopier' => 'Mopier',
	'Class:Printer/Attribute:type/Value:mopier+' => '',
	'Class:Printer/Attribute:type/Value:printer' => 'Stampante',
	'Class:Printer/Attribute:type/Value:printer+' => '',
	'Class:Printer/Attribute:technology' => 'Tecnologia',
	'Class:Printer/Attribute:technology+' => '',
	'Class:Printer/Attribute:technology/Value:inkjet' => 'Inkjet',
	'Class:Printer/Attribute:technology/Value:inkjet+' => '',
	'Class:Printer/Attribute:technology/Value:laser' => 'Laser',
	'Class:Printer/Attribute:technology/Value:laser+' => '',
	'Class:Printer/Attribute:technology/Value:tracer' => 'Tracer',
	'Class:Printer/Attribute:technology/Value:tracer+' => '',
	'Class:lnkCIToDoc' => 'Doc/CI',
	'Class:lnkCIToDoc+' => '',
	'Class:lnkCIToDoc/Attribute:ci_id' => 'CI',
	'Class:lnkCIToDoc/Attribute:ci_id+' => '',
	'Class:lnkCIToDoc/Attribute:document_id' => 'Documento',
	'Class:lnkCIToDoc/Attribute:document_id+' => '',
	'Class:lnkCIToContact' => 'CI/Contatto',
	'Class:lnkCIToContact+' => '',
	'Class:lnkCIToContact/Attribute:ci_id' => 'CI',
	'Class:lnkCIToContact/Attribute:ci_id+' => '',
	'Class:lnkCIToContact/Attribute:contact_id' => 'Contatto',
	'Class:lnkCIToContact/Attribute:contact_id+' => '',
	'Class:lnkCIToContact/Attribute:role' => 'Ruolo',
	'Class:lnkCIToContact/Attribute:role+' => 'Ruolo del contatto per quanto riguarda il CI',
	'Class:lnkSolutionToCI' => 'CI/Solutione',
	'Class:lnkSolutionToCI+' => '',
	'Class:lnkSolutionToCI/Attribute:solution_id' => 'Soluzione applicativa',
	'Class:lnkSolutionToCI/Attribute:solution_id+' => '',
	'Class:lnkSolutionToCI/Attribute:ci_id' => 'CI',
	'Class:lnkSolutionToCI/Attribute:ci_id+' => '',
	'Class:lnkSolutionToCI/Attribute:utility' => 'Utility',
	'Class:lnkSolutionToCI/Attribute:utility+' => 'Utility del CI nella soluzione applicativa',
	'Class:lnkProcessToSolution' => 'Processo di business/Solutione',
	'Class:lnkProcessToSolution+' => '',
	'Class:lnkProcessToSolution/Attribute:solution_id' => 'Soluzione applicativa',
	'Class:lnkProcessToSolution/Attribute:solution_id+' => '',
	'Class:lnkProcessToSolution/Attribute:process_id' => 'Processo',
	'Class:lnkProcessToSolution/Attribute:process_id+' => '',
	'Class:lnkProcessToSolution/Attribute:reason' => 'Motivo',
	'Class:lnkProcessToSolution/Attribute:reason+' => 'Più informazioni tra il processo di business e la soluzione applicativa',
	'Relation:impacts/Description' => 'Elementi impattati da...',
	'Relation:impacts/DownStream' => 'Impatto...',
	'Relation:impacts/UpStream' => 'Dipende da...',
	'Relation:depends on/Description' => 'Elementi di questo elemento dipende da',
	'Relation:depends on/DownStream' => 'Dipende da...',
	'Relation:depends on/UpStream' => 'Impatto...',
	'Class:Organization/Attribute:parent_name' => 'Parent name',
	'Class:Organization/Attribute:parent_name+' => 'Name of the parent organization',
	'Class:Location/Attribute:org_name' => 'Nome dell\'organizzazione',
	'Class:Location/Attribute:org_name+' => '',
	'Class:Location/Attribute:parent_name' => 'Parent name',
	'Class:Location/Attribute:parent_name+' => '',
	'Class:Group/Attribute:owner_name' => 'Cognome',
	'Class:Group/Attribute:owner_name+' => 'Nome',
	'Class:Group/Attribute:parent_name' => 'Nome',
	'Class:Group/Attribute:parent_name+' => '',
	'Class:lnkGroupToCI/Attribute:group_name' => 'Nome',
	'Class:lnkGroupToCI/Attribute:group_name+' => '',
	'Class:lnkGroupToCI/Attribute:ci_name' => 'Nome',
	'Class:lnkGroupToCI/Attribute:ci_name+' => '',
	'Class:lnkGroupToCI/Attribute:ci_status' => 'CI Stato',
	'Class:lnkGroupToCI/Attribute:ci_status+' => '',
	'Class:Contact' => 'Contatto',
	'Class:Contact+' => '',
	'Class:Contact/Attribute:name' => 'Nome',
	'Class:Contact/Attribute:name+' => '',
	'Class:Contact/Attribute:status' => 'Stato',
	'Class:Contact/Attribute:status+' => '',
	'Class:Contact/Attribute:status/Value:active' => 'Attivo',
	'Class:Contact/Attribute:status/Value:active+' => 'Attivo',
	'Class:Contact/Attribute:status/Value:inactive' => 'Inattivo',
	'Class:Contact/Attribute:status/Value:inactive+' => 'Inattivo',
	'Class:Contact/Attribute:org_id' => 'Organizzazione',
	'Class:Contact/Attribute:org_id+' => '',
	'Class:Contact/Attribute:org_name' => 'Organizzazione',
	'Class:Contact/Attribute:org_name+' => '',
	'Class:Contact/Attribute:email' => 'Email',
	'Class:Contact/Attribute:email+' => '',
	'Class:Contact/Attribute:phone' => 'Telefono',
	'Class:Contact/Attribute:phone+' => '',
	'Class:Contact/Attribute:location_id' => 'Posizione',
	'Class:Contact/Attribute:location_id+' => '',
	'Class:Contact/Attribute:location_name' => 'Posizione',
	'Class:Contact/Attribute:location_name+' => '',
	'Class:Contact/Attribute:ci_list' => 'CIs',
	'Class:Contact/Attribute:ci_list+' => 'CIs relativi al contatto',
	'Class:Contact/Attribute:contract_list' => 'Contratti',
	'Class:Contact/Attribute:contract_list+' => 'Contratti relativi al contatto',
	'Class:Contact/Attribute:service_list' => 'Servizi',
	'Class:Contact/Attribute:service_list+' => 'Servizi relativi al contatto',
	'Class:Contact/Attribute:ticket_list' => 'Tickets',
	'Class:Contact/Attribute:ticket_list+' => 'Tickets relativi al contatto',
	'Class:Contact/Attribute:team_list' => 'Squadre',
	'Class:Contact/Attribute:team_list+' => 'Squadre di appartenenza',
	'Class:Contact/Attribute:finalclass' => 'Tipo',
	'Class:Contact/Attribute:finalclass+' => '',
	'Class:lnkTeamToContact/Attribute:contact_location_id' => 'Posizione',
	'Class:lnkTeamToContact/Attribute:contact_location_id+' => '',
	'Class:lnkTeamToContact/Attribute:contact_email' => 'Email',
	'Class:lnkTeamToContact/Attribute:contact_email+' => '',
	'Class:lnkTeamToContact/Attribute:contact_phone' => 'Telefono',
	'Class:lnkTeamToContact/Attribute:contact_phone+' => '',
	'Class:Document' => 'Documento',
	'Class:Document+' => '',
	'Class:Document/Attribute:name' => 'Nome',
	'Class:Document/Attribute:name+' => '',
	'Class:Document/Attribute:org_id' => 'Organizzazione',
	'Class:Document/Attribute:description+' => '',
	'Class:Document/Attribute:org_name' => 'Nome dell\'organizzazione',
	'Class:Document/Attribute:org_name+' => '',
	'Class:Document/Attribute:description' => 'Descrizione',
	'Class:Document/Attribute:type' => 'Tipo',
	'Class:Document/Attribute:type+' => '',
	'Class:Document/Attribute:type/Value:contract' => 'Contratto',
	'Class:Document/Attribute:type/Value:contract+' => '',
	'Class:Document/Attribute:type/Value:networkmap' => 'Network Map',
	'Class:Document/Attribute:type/Value:networkmap+' => '',
	'Class:Document/Attribute:type/Value:presentation' => 'Presentazine',
	'Class:Document/Attribute:type/Value:presentation+' => '',
	'Class:Document/Attribute:type/Value:training' => 'Formazione',
	'Class:Document/Attribute:type/Value:training+' => '',
	'Class:Document/Attribute:type/Value:whitePaper' => 'Foglio bianco',
	'Class:Document/Attribute:type/Value:whitePaper+' => '',
	'Class:Document/Attribute:type/Value:workinginstructions' => 'Istruzioni di lavoro',
	'Class:Document/Attribute:type/Value:workinginstructions+' => '',
	'Class:Document/Attribute:status' => 'Stato',
	'Class:Document/Attribute:status+' => '',
	'Class:Document/Attribute:status/Value:draft' => 'Draft',
	'Class:Document/Attribute:status/Value:draft+' => '',
	'Class:Document/Attribute:status/Value:obsolete' => 'Obsoleto',
	'Class:Document/Attribute:status/Value:obsolete+' => '',
	'Class:Document/Attribute:status/Value:published' => 'Pubblicato',
	'Class:Document/Attribute:status/Value:published+' => '',
	'Class:Document/Attribute:ci_list' => 'CIs',
	'Class:Document/Attribute:ci_list+' => 'CIs relativo a questo documento',
	'Class:Document/Attribute:contract_list' => 'Contratti',
	'Class:Document/Attribute:contract_list+' => 'Contratti relativi a questo documento',
	'Class:Document/Attribute:service_list' => 'Servizi',
	'Class:Document/Attribute:service_list+' => 'Servizi relativi a questo documento',
	'Class:Document/Attribute:ticket_list' => 'Tickets',
	'Class:Document/Attribute:ticket_list+' => 'Tickets relativi a questo documento',
	'Class:Document:PreviewTab' => 'Anteprima',
	'Class:Licence/Attribute:org_name' => 'Cognome',
	'Class:Licence/Attribute:org_name+' => 'Nome',
	'Class:Subnet/Name' => '%1$s / %2$s~~',
	'Class:Software' => 'Software',
	'Class:Software+' => '',
	'Class:Software/Attribute:name' => 'Nome',
	'Class:Software/Attribute:name+' => '',
	'Class:Software/Attribute:description' => 'Descrizione',
	'Class:Software/Attribute:description+' => '',
	'Class:Software/Attribute:instance_list' => 'Installazioni',
	'Class:Software/Attribute:instance_list+' => 'Istanze di questo software',
	'Class:Software/Attribute:finalclass' => 'Tipo',
	'Class:Software/Attribute:finalclass+' => '',
	'Class:Application/Attribute:name' => 'Nome',
	'Class:Application/Attribute:name+' => '',
	'Class:Application/Attribute:description' => 'Descrizione',
	'Class:Application/Attribute:description+' => '',
	'Class:lnkPatchToCI/Attribute:patch_name' => 'Patch',
	'Class:lnkPatchToCI/Attribute:patch_name+' => '',
	'Class:lnkPatchToCI/Attribute:ci_name' => 'CI',
	'Class:lnkPatchToCI/Attribute:ci_name+' => '',
	'Class:lnkPatchToCI/Attribute:ci_status' => 'CI Stato',
	'Class:lnkPatchToCI/Attribute:ci_status+' => '',
	'Class:FunctionalCI' => 'CI Funzionale',
	'Class:FunctionalCI+' => '',
	'Class:FunctionalCI/Attribute:name' => 'Nome',
	'Class:FunctionalCI/Attribute:name+' => '',
	'Class:FunctionalCI/Attribute:status' => 'Stato',
	'Class:FunctionalCI/Attribute:status+' => '',
	'Class:FunctionalCI/Attribute:status/Value:implementation' => 'Implementazione',
	'Class:FunctionalCI/Attribute:status/Value:implementation+' => '',
	'Class:FunctionalCI/Attribute:status/Value:obsolete' => 'Obsoleto',
	'Class:FunctionalCI/Attribute:status/Value:obsolete+' => '',
	'Class:FunctionalCI/Attribute:status/Value:production' => 'Produzione',
	'Class:FunctionalCI/Attribute:status/Value:production+' => '',
	'Class:FunctionalCI/Attribute:org_id' => 'Organizzazione proprietaria',
	'Class:FunctionalCI/Attribute:org_id+' => '',
	'Class:FunctionalCI/Attribute:owner_name' => 'Organizzazione proprietaria',
	'Class:FunctionalCI/Attribute:owner_name+' => '',
	'Class:FunctionalCI/Attribute:importance' => 'Criticità di business',
	'Class:FunctionalCI/Attribute:importance+' => '',
	'Class:FunctionalCI/Attribute:importance/Value:high' => 'Alta',
	'Class:FunctionalCI/Attribute:importance/Value:high+' => '',
	'Class:FunctionalCI/Attribute:importance/Value:low' => 'Bassa',
	'Class:FunctionalCI/Attribute:importance/Value:low+' => '',
	'Class:FunctionalCI/Attribute:importance/Value:medium' => 'Media',
	'Class:FunctionalCI/Attribute:importance/Value:medium+' => '',
	'Class:FunctionalCI/Attribute:contact_list' => 'Contatti',
	'Class:FunctionalCI/Attribute:contact_list+' => 'Contatti per questo CI',
	'Class:FunctionalCI/Attribute:document_list' => 'Documenti',
	'Class:FunctionalCI/Attribute:document_list+' => 'Documentazione per questo CI',
	'Class:FunctionalCI/Attribute:solution_list' => 'Soluzioni applicative',
	'Class:FunctionalCI/Attribute:solution_list+' => 'Soluzioni applicative che utilizzano questo CI',
	'Class:FunctionalCI/Attribute:contract_list' => 'Contratti',
	'Class:FunctionalCI/Attribute:contract_list+' => 'Contratti a sostegno di questo CI',
	'Class:FunctionalCI/Attribute:ticket_list' => 'Tickets',
	'Class:FunctionalCI/Attribute:ticket_list+' => 'Tickets relativi al CI',
	'Class:FunctionalCI/Attribute:finalclass' => 'Tipo',
	'Class:FunctionalCI/Attribute:finalclass+' => '',
	'Class:SoftwareInstance' => 'Istanza software',
	'Class:SoftwareInstance+' => '',
	'Class:SoftwareInstance/Name' => '%1$s - %2$s~~',
	'Class:SoftwareInstance/Attribute:device_id' => 'Dispositivo',
	'Class:SoftwareInstance/Attribute:device_id+' => '',
	'Class:SoftwareInstance/Attribute:device_name' => 'Dispositivo',
	'Class:SoftwareInstance/Attribute:device_name+' => '',
	'Class:SoftwareInstance/Attribute:licence_id' => 'Licenza',
	'Class:SoftwareInstance/Attribute:licence_id+' => '',
	'Class:SoftwareInstance/Attribute:licence_name' => 'Licenza',
	'Class:SoftwareInstance/Attribute:licence_name+' => '',
	'Class:SoftwareInstance/Attribute:software_name' => 'Software',
	'Class:SoftwareInstance/Attribute:software_name+' => '',
	'Class:SoftwareInstance/Attribute:version' => 'Versione',
	'Class:SoftwareInstance/Attribute:version+' => '',
	'Class:SoftwareInstance/Attribute:description' => 'Descrizione',
	'Class:SoftwareInstance/Attribute:description+' => '',
	'Class:ApplicationInstance/Name' => '%1$s - %2$s~~',
	'Class:ApplicationInstance/Attribute:software_name' => 'Nome',
	'Class:ApplicationInstance/Attribute:software_name+' => '',
	'Class:DBServerInstance/Name' => '%1$s - %2$s~~',
	'Class:DBServerInstance/Attribute:software_name' => 'Nome del Software',
	'Class:DBServerInstance/Attribute:software_name+' => '',
	'Class:DatabaseInstance/Name' => '%1$s - %2$s~~',
	'Class:DatabaseInstance/Attribute:db_server_instance_version' => 'Versione del database',
	'Class:DatabaseInstance/Attribute:db_server_instance_version+' => '',
	'Class:ConnectableCI' => 'CI collegabile',
	'Class:ConnectableCI+' => 'CI fisico',
	'Class:ConnectableCI/Attribute:brand' => 'Marca',
	'Class:ConnectableCI/Attribute:brand+' => '',
	'Class:ConnectableCI/Attribute:model' => 'Modello',
	'Class:ConnectableCI/Attribute:model+' => '',
	'Class:ConnectableCI/Attribute:serial_number' => 'Numero seriala',
	'Class:ConnectableCI/Attribute:serial_number+' => '',
	'Class:ConnectableCI/Attribute:asset_ref' => 'Asset di riferimento',
	'Class:ConnectableCI/Attribute:asset_ref+' => '',
	'Class:NetworkInterface/Name' => '%1$s - %2$s~~',
	'Class:NetworkInterface/Attribute:device_name' => 'Dispositivo',
	'Class:NetworkInterface/Attribute:device_name+' => '',
	'Class:NetworkInterface/Attribute:connected_name' => 'Connesso a ',
	'Class:NetworkInterface/Attribute:connected_name+' => '',
	'Class:NetworkInterface/Attribute:connected_if_device_id' => 'Dispositivo connesso',
	'Class:NetworkInterface/Attribute:connected_if_device_id+' => '',
	'Class:NetworkInterface/Attribute:connected_if_device_id_name' => 'Dispositivo',
	'Class:NetworkInterface/Attribute:connected_if_device_id_name+' => '',
	'Class:Device' => 'Dispositivo',
	'Class:Device+' => '',
	'Class:Device/Attribute:nwinterface_list' => 'Interfaccia di Rete',
	'Class:Device/Attribute:nwinterface_list+' => '',
	'Class:MobileCI' => 'CI Mobili',
	'Class:MobileCI+' => '',
	'Class:InfrastructureCI' => 'CI Infrastrutture',
	'Class:InfrastructureCI+' => '',
	'Class:InfrastructureCI/Attribute:description' => 'Descrizione',
	'Class:InfrastructureCI/Attribute:description+' => '',
	'Class:InfrastructureCI/Attribute:location_id' => 'Posizione',
	'Class:InfrastructureCI/Attribute:location_id+' => '',
	'Class:InfrastructureCI/Attribute:location_name' => 'Posizione',
	'Class:InfrastructureCI/Attribute:location_name+' => '',
	'Class:InfrastructureCI/Attribute:location_details' => 'Dettagli di posizione',
	'Class:InfrastructureCI/Attribute:location_details+' => '',
	'Class:InfrastructureCI/Attribute:management_ip' => 'Gestione IP',
	'Class:InfrastructureCI/Attribute:management_ip+' => '',
	'Class:InfrastructureCI/Attribute:default_gateway' => 'Gateway di default',
	'Class:InfrastructureCI/Attribute:default_gateway+' => '',
	'Class:lnkCIToDoc/Attribute:ci_name' => 'CI',
	'Class:lnkCIToDoc/Attribute:ci_name+' => '',
	'Class:lnkCIToDoc/Attribute:ci_status' => 'CI Stato',
	'Class:lnkCIToDoc/Attribute:ci_status+' => '',
	'Class:lnkCIToDoc/Attribute:document_name' => 'Documento',
	'Class:lnkCIToDoc/Attribute:document_name+' => '',
	'Class:lnkCIToDoc/Attribute:document_type' => 'Tipo di documento',
	'Class:lnkCIToDoc/Attribute:document_type+' => '',
	'Class:lnkCIToDoc/Attribute:document_status' => 'Stato del documento',
	'Class:lnkCIToDoc/Attribute:document_status+' => '',
	'Class:lnkCIToContact/Attribute:ci_name' => 'CI',
	'Class:lnkCIToContact/Attribute:ci_name+' => '',
	'Class:lnkCIToContact/Attribute:ci_status' => 'CI Stato',
	'Class:lnkCIToContact/Attribute:ci_status+' => '',
	'Class:lnkCIToContact/Attribute:contact_name' => 'Contatto',
	'Class:lnkCIToContact/Attribute:contact_name+' => '',
	'Class:lnkCIToContact/Attribute:contact_email' => 'Contatto Email',
	'Class:lnkCIToContact/Attribute:contact_email+' => '',
	'Class:lnkSolutionToCI/Attribute:solution_name' => 'Soluzione applicativa',
	'Class:lnkSolutionToCI/Attribute:solution_name+' => '',
	'Class:lnkSolutionToCI/Attribute:ci_name' => 'CI',
	'Class:lnkSolutionToCI/Attribute:ci_name+' => '',
	'Class:lnkSolutionToCI/Attribute:ci_status' => 'CI Stato',
	'Class:lnkSolutionToCI/Attribute:ci_status+' => '',
	'Class:lnkProcessToSolution/Attribute:solution_name' => 'Soluzione applicativa',
	'Class:lnkProcessToSolution/Attribute:solution_name+' => '',
	'Class:lnkProcessToSolution/Attribute:process_name' => 'Processo',
	'Class:lnkProcessToSolution/Attribute:process_name+' => '',
	'Class:Subnet/Tab:IPUsage' => 'Utilizzo IP',
	'Class:Subnet/Tab:IPUsage-explain' => 'Iterfacce che hanno un IP nell\'intervallo: <em>%1$s</em> e <em>%2$s</em>',
	'Class:Subnet/Tab:FreeIPs' => 'IP liberi',
	'Class:Subnet/Tab:FreeIPs-count' => 'IP liberi: %1$s',
	'Class:Subnet/Tab:FreeIPs-explain' => 'Qui c\'è un estratto di 10 indirizzi IP liberi',
	'Menu:DataAdministration' => 'Dati di amministrazione',
	'Menu:DataAdministration+' => '',
	'Menu:Catalogs' => 'Cataloghi',
	'Menu:Catalogs+' => 'Tipi di dato',
	'Menu:Audit' => 'Audit',
	'Menu:Audit+' => 'Audit',
	'Menu:CSVImport' =>  'Importazione CSV',
	'Menu:CSVImport+' => '',
	'Menu:Organization' => 'Organizzazioni',
	'Menu:Organization+' => 'Tutte le organizzazioni',
	'Menu:Application' => 'Applicazioni',
	'Menu:Application+' => 'Tutte le applicazioni',
	'Menu:DBServer' => 'Database Servers',
	'Menu:DBServer+' => 'Database Servers',
	'Menu:ConfigManagement' => 'Gestione delle Configurazioni',
	'Menu:ConfigManagement+' => 'Gestione delle Configurazioni',
	'Menu:ConfigManagementOverview' => 'Panoramica',
	'Menu:ConfigManagementOverview+' => 'Panoramica',
	'Menu:Contact' => 'Contatti',
	'Menu:Contact+' => 'Contatti',
	'Menu:Contact:Count' => '%1$d contatti',
	'Menu:Person' => 'Persone',
	'Menu:Person+' => 'Tutte le persone',
	'Menu:Team' => 'Teams',
	'Menu:Team+' => 'Tutti i Teams',
	'Menu:Document' => 'Documenti',
	'Menu:Document+' => 'Tutti i Documenti',
	'Menu:Location' => 'Posizioni',
	'Menu:Location+' => 'Tutte le pozisioni',
	'Menu:ConfigManagementCI' => 'Elementi di Configurazione (CI)',
	'Menu:ConfigManagementCI+' => 'Elementi di Configurazione (CI)',
	'Menu:BusinessProcess' => 'Processi di business',
	'Menu:BusinessProcess+' => 'Tutti i processi di business',
	'Menu:ApplicationSolution' => 'Soluzioni applicative',
	'Menu:ApplicationSolution+' => 'Tutte le soluzioni applicative',
	'Menu:ConfigManagementSoftware' => 'Gestione delle Applicazioni',
	'Menu:Licence' => 'Licenze',
	'Menu:Licence+' => 'Tutte le licenze',
	'Menu:Patch' => 'Patches',
	'Menu:Patch+' => 'Tutte le patches',
	'Menu:ApplicationInstance' => 'Software Installati',
	'Menu:ApplicationInstance+' => 'Applicazioni e Database servers',
	'Menu:ConfigManagementHardware' => 'Gestione Infrastrutture',
	'Menu:Subnet' => 'Subnets',
	'Menu:Subnet+' => 'Tutte le Subnets',
	'Menu:NetworkDevice' => 'Dispositivi di rete',
	'Menu:NetworkDevice+' => 'Tutti i dispositivi di rete',
	'Menu:Server' => 'Server',
	'Menu:Server+' => 'Tutti i Server',
	'Menu:Printer' => 'Stampanti',
	'Menu:Printer+' => 'Tutte le stampanti',
	'Menu:MobilePhone' => 'Cellulari',
	'Menu:MobilePhone+' => 'Tutti i cellulari',
	'Menu:PC' => 'Personal Computers',
	'Menu:PC+' => 'Tutti i Personal Computers',
	'Menu:NewContact' => 'Nuovo Contatto',
	'Menu:NewContact+' => 'Nuovo Contatto',
	'Menu:SearchContacts' => 'Ricerca contatti',
	'Menu:SearchContacts+' => 'Ricerca contatti',
	'Menu:NewCI' => 'Nuovo CI',
	'Menu:NewCI+' => 'Nuovo CI',
	'Menu:SearchCIs' => 'Ricerca CIs',
	'Menu:SearchCIs+' => 'Ricerca CIs',
	'Menu:ConfigManagement:Devices' => 'Dispositvi',
	'Menu:ConfigManagement:AllDevices' => 'Infrastrutture',
	'Menu:ConfigManagement:SWAndApps' => 'Software e Applicazioni',
	'Menu:ConfigManagement:Misc' => 'Varie',
	'Menu:Group' => 'Gruppi di CIs',
	'Menu:Group+' => 'Gruppi di CIs',
	'Menu:ConfigManagement:Shortcuts' => 'Scorciatoie',
	'Menu:ConfigManagement:AllContacts' => 'Tutti i contatti: %1$d',
	'Class:Organization/Attribute:deliverymodel_id' => 'Delivery model~~',
	'Class:Organization/Attribute:deliverymodel_name' => 'Delivery model name~~',
	'Class:Organization/Attribute:parent_id_friendlyname' => 'Parent~~',
	'Class:Organization/Attribute:parent_id_friendlyname+' => 'Parent organization~~',
	'Class:Location/Attribute:physicaldevice_list' => 'Devices~~',
	'Class:Location/Attribute:physicaldevice_list+' => 'All the devices in this location~~',
	'Class:Location/Attribute:person_list' => 'Contacts~~',
	'Class:Location/Attribute:person_list+' => 'All the contacts located on this location~~',
	'Class:Contact/Attribute:notify' => 'Notification~~',
	'Class:Contact/Attribute:notify/Value:no' => 'no~~',
	'Class:Contact/Attribute:notify/Value:no+' => 'no~~',
	'Class:Contact/Attribute:notify/Value:yes' => 'yes~~',
	'Class:Contact/Attribute:notify/Value:yes+' => 'yes~~',
	'Class:Contact/Attribute:function' => 'Function~~',
	'Class:Contact/Attribute:cis_list' => 'CIs~~',
	'Class:Contact/Attribute:cis_list+' => 'All the configuration items linked to this contact~~',
	'Class:Person/Attribute:name' => 'Last Name~~',
	'Class:Person/Attribute:employee_number' => 'Employee number~~',
	'Class:Person/Attribute:mobile_phone' => 'Mobile phone~~',
	'Class:Person/Attribute:location_id' => 'Location~~',
	'Class:Person/Attribute:location_name' => 'Location name~~',
	'Class:Person/Attribute:manager_id' => 'Manager~~',
	'Class:Person/Attribute:manager_name' => 'Manager name~~',
	'Class:Person/Attribute:team_list' => 'Teams~~',
	'Class:Person/Attribute:team_list+' => 'All the teams this person belongs to~~',
	'Class:Person/Attribute:tickets_list' => 'Tickets~~',
	'Class:Person/Attribute:tickets_list+' => 'All the tickets this person is the caller~~',
	'Class:Person/Attribute:manager_id_friendlyname' => 'Manager friendly name~~',
	'Class:Team/Attribute:persons_list' => 'Members~~',
	'Class:Team/Attribute:persons_list+' => 'All the people belonging to this team~~',
	'Class:Team/Attribute:tickets_list' => 'Tickets~~',
	'Class:Team/Attribute:tickets_list+' => 'All the tickets assigned to this team~~',
	'Class:Document/Attribute:documenttype_id' => 'Document type~~',
	'Class:Document/Attribute:documenttype_name' => 'Document type name~~',
	'Class:Document/Attribute:version' => 'Version~~',
	'Class:Document/Attribute:cis_list' => 'CIs~~',
	'Class:Document/Attribute:cis_list+' => 'All the configuration items linked to this document~~',
	'Class:Document/Attribute:contracts_list' => 'Contracts~~',
	'Class:Document/Attribute:contracts_list+' => 'All the contracts linked to this document~~',
	'Class:Document/Attribute:services_list' => 'Services~~',
	'Class:Document/Attribute:services_list+' => 'All the services linked to this document~~',
	'Class:Document/Attribute:finalclass' => 'Document Type~~',
	'Class:DocumentFile' => 'Document File~~',
	'Class:DocumentFile/Attribute:file' => 'File~~',
	'Class:DocumentNote' => 'Document Note~~',
	'Class:DocumentNote/Attribute:text' => 'Text~~',
	'Class:DocumentWeb' => 'Document Web~~',
	'Class:DocumentWeb/Attribute:url' => 'URL~~',
	'Class:FunctionalCI/Attribute:description' => 'Description~~',
	'Class:FunctionalCI/Attribute:organization_name' => 'Organization name~~',
	'Class:FunctionalCI/Attribute:organization_name+' => 'Common name~~',
	'Class:FunctionalCI/Attribute:business_criticity' => 'Business criticity~~',
	'Class:FunctionalCI/Attribute:business_criticity/Value:high' => 'high~~',
	'Class:FunctionalCI/Attribute:business_criticity/Value:high+' => 'high~~',
	'Class:FunctionalCI/Attribute:business_criticity/Value:low' => 'low~~',
	'Class:FunctionalCI/Attribute:business_criticity/Value:low+' => 'low~~',
	'Class:FunctionalCI/Attribute:business_criticity/Value:medium' => 'medium~~',
	'Class:FunctionalCI/Attribute:business_criticity/Value:medium+' => 'medium~~',
	'Class:FunctionalCI/Attribute:move2production' => 'Move to production date~~',
	'Class:FunctionalCI/Attribute:contacts_list' => 'Contacts~~',
	'Class:FunctionalCI/Attribute:contacts_list+' => 'All the contacts for this configuration item~~',
	'Class:FunctionalCI/Attribute:documents_list' => 'Documents~~',
	'Class:FunctionalCI/Attribute:documents_list+' => 'All the documents linked to this configuration item~~',
	'Class:FunctionalCI/Attribute:applicationsolution_list' => 'Application solutions~~',
	'Class:FunctionalCI/Attribute:applicationsolution_list+' => 'All the application solutions depending on this configuration item~~',
	'Class:FunctionalCI/Attribute:providercontracts_list' => 'Provider contracts~~',
	'Class:FunctionalCI/Attribute:providercontracts_list+' => 'All the provider contracts for this configuration item~~',
	'Class:FunctionalCI/Attribute:services_list' => 'Services~~',
	'Class:FunctionalCI/Attribute:services_list+' => 'All the services impacted by this configuration item~~',
	'Class:FunctionalCI/Attribute:softwares_list' => 'Softwares~~',
	'Class:FunctionalCI/Attribute:softwares_list+' => 'All the softwares installed on this configuration item~~',
	'Class:FunctionalCI/Attribute:tickets_list' => 'Tickets~~',
	'Class:FunctionalCI/Attribute:tickets_list+' => 'All the tickets for this configuration item~~',
	'Class:FunctionalCI/Tab:OpenedTickets' => 'Active Tickets~~',
	'Class:PhysicalDevice' => 'Physical Device~~',
	'Class:PhysicalDevice/Attribute:serialnumber' => 'Serial number~~',
	'Class:PhysicalDevice/Attribute:location_id' => 'Location~~',
	'Class:PhysicalDevice/Attribute:location_name' => 'Location name~~',
	'Class:PhysicalDevice/Attribute:status' => 'Status~~',
	'Class:PhysicalDevice/Attribute:status/Value:implementation' => 'implementation~~',
	'Class:PhysicalDevice/Attribute:status/Value:implementation+' => 'implementation~~',
	'Class:PhysicalDevice/Attribute:status/Value:obsolete' => 'obsolete~~',
	'Class:PhysicalDevice/Attribute:status/Value:obsolete+' => 'obsolete~~',
	'Class:PhysicalDevice/Attribute:status/Value:production' => 'production~~',
	'Class:PhysicalDevice/Attribute:status/Value:production+' => 'production~~',
	'Class:PhysicalDevice/Attribute:status/Value:stock' => 'stock~~',
	'Class:PhysicalDevice/Attribute:status/Value:stock+' => 'stock~~',
	'Class:PhysicalDevice/Attribute:brand_id' => 'Brand~~',
	'Class:PhysicalDevice/Attribute:brand_name' => 'Brand name~~',
	'Class:PhysicalDevice/Attribute:model_id' => 'Model~~',
	'Class:PhysicalDevice/Attribute:model_name' => 'Model name~~',
	'Class:PhysicalDevice/Attribute:asset_number' => 'Asset number~~',
	'Class:PhysicalDevice/Attribute:purchase_date' => 'Purchase date~~',
	'Class:PhysicalDevice/Attribute:end_of_warranty' => 'End of warranty~~',
	'Class:Rack' => 'Rack~~',
	'Class:Rack/Attribute:nb_u' => 'Rack units~~',
	'Class:Rack/Attribute:device_list' => 'Devices~~',
	'Class:Rack/Attribute:device_list+' => 'All the physical devices racked into this rack~~',
	'Class:Rack/Attribute:enclosure_list' => 'Enclosures~~',
	'Class:Rack/Attribute:enclosure_list+' => 'All the enclosures in this rack~~',
	'Class:TelephonyCI' => 'Telephony CI~~',
	'Class:TelephonyCI/Attribute:phonenumber' => 'Phone number~~',
	'Class:Phone' => 'Phone~~',
	'Class:IPPhone' => 'IP Phone~~',
	'Class:Tablet' => 'Tablet~~',
	'Class:ConnectableCI/Attribute:networkdevice_list' => 'Network devices~~',
	'Class:ConnectableCI/Attribute:networkdevice_list+' => 'All network devices connected to this device~~',
	'Class:ConnectableCI/Attribute:physicalinterface_list' => 'Network interfaces~~',
	'Class:ConnectableCI/Attribute:physicalinterface_list+' => 'All the physical network interfaces~~',
	'Class:DatacenterDevice' => 'Datacenter Device~~',
	'Class:DatacenterDevice/Attribute:rack_id' => 'Rack~~',
	'Class:DatacenterDevice/Attribute:rack_name' => 'Rack name~~',
	'Class:DatacenterDevice/Attribute:enclosure_id' => 'Enclosure~~',
	'Class:DatacenterDevice/Attribute:enclosure_name' => 'Enclosure name~~',
	'Class:DatacenterDevice/Attribute:nb_u' => 'Rack units~~',
	'Class:DatacenterDevice/Attribute:managementip' => 'Management ip~~',
	'Class:DatacenterDevice/Attribute:powerA_id' => 'PowerA source~~',
	'Class:DatacenterDevice/Attribute:powerA_name' => 'PowerA source name~~',
	'Class:DatacenterDevice/Attribute:powerB_id' => 'PowerB source~~',
	'Class:DatacenterDevice/Attribute:powerB_name' => 'PowerB source name~~',
	'Class:DatacenterDevice/Attribute:fiberinterfacelist_list' => 'FC ports~~',
	'Class:DatacenterDevice/Attribute:fiberinterfacelist_list+' => 'All the fiber channel interfaces for this device~~',
	'Class:DatacenterDevice/Attribute:san_list' => 'SANs~~',
	'Class:DatacenterDevice/Attribute:san_list+' => 'All the SAN switches connected to this device~~',
	'Class:DatacenterDevice/Attribute:redundancy' => 'Redundancy~~',
	'Class:DatacenterDevice/Attribute:redundancy/count' => 'The device is up if at least one power connection (A or B) is up~~',
	'Class:DatacenterDevice/Attribute:redundancy/disabled' => 'The device is up if all its power connections are up~~',
	'Class:DatacenterDevice/Attribute:redundancy/percent' => 'The device is up if at least %1$s %% of its power connections are up~~',
	'Class:NetworkDevice/Attribute:networkdevicetype_id' => 'Network type~~',
	'Class:NetworkDevice/Attribute:networkdevicetype_name' => 'Network type name~~',
	'Class:NetworkDevice/Attribute:connectablecis_list' => 'Devices~~',
	'Class:NetworkDevice/Attribute:connectablecis_list+' => 'All the devices connected to this network device~~',
	'Class:NetworkDevice/Attribute:iosversion_id' => 'IOS version~~',
	'Class:NetworkDevice/Attribute:iosversion_name' => 'IOS version name~~',
	'Class:Server/Attribute:osfamily_id' => 'OS family~~',
	'Class:Server/Attribute:osfamily_name' => 'OS family name~~',
	'Class:Server/Attribute:osversion_id' => 'OS version~~',
	'Class:Server/Attribute:osversion_name' => 'OS version name~~',
	'Class:Server/Attribute:oslicence_id' => 'OS licence~~',
	'Class:Server/Attribute:oslicence_name' => 'OS licence name~~',
	'Class:Server/Attribute:logicalvolumes_list' => 'Logical volumes~~',
	'Class:Server/Attribute:logicalvolumes_list+' => 'All the logical volumes connected to this server~~',
	'Class:StorageSystem' => 'Storage System~~',
	'Class:StorageSystem/Attribute:logicalvolume_list' => 'Logical volumes~~',
	'Class:StorageSystem/Attribute:logicalvolume_list+' => 'All the logical volumes in this storage system~~',
	'Class:SANSwitch' => 'SAN Switch~~',
	'Class:SANSwitch/Attribute:datacenterdevice_list' => 'Devices~~',
	'Class:SANSwitch/Attribute:datacenterdevice_list+' => 'All the devices connected to this SAN switch~~',
	'Class:TapeLibrary' => 'Tape Library~~',
	'Class:TapeLibrary/Attribute:tapes_list' => 'Tapes~~',
	'Class:TapeLibrary/Attribute:tapes_list+' => 'All the tapes in the tape library~~',
	'Class:NAS' => 'NAS~~',
	'Class:NAS/Attribute:nasfilesystem_list' => 'Filesystems~~',
	'Class:NAS/Attribute:nasfilesystem_list+' => 'All the file systems in this NAS~~',
	'Class:PC/Attribute:osfamily_id' => 'OS family~~',
	'Class:PC/Attribute:osfamily_name' => 'OS family name~~',
	'Class:PC/Attribute:osversion_id' => 'OS version~~',
	'Class:PC/Attribute:osversion_name' => 'OS version name~~',
	'Class:PC/Attribute:type' => 'Type~~',
	'Class:PC/Attribute:type/Value:desktop' => 'desktop~~',
	'Class:PC/Attribute:type/Value:desktop+' => 'desktop~~',
	'Class:PC/Attribute:type/Value:laptop' => 'laptop~~',
	'Class:PC/Attribute:type/Value:laptop+' => 'laptop~~',
	'Class:PowerConnection' => 'Power Connection~~',
	'Class:PowerSource' => 'Power Source~~',
	'Class:PowerSource/Attribute:pdus_list' => 'PDUs~~',
	'Class:PowerSource/Attribute:pdus_list+' => 'All the PDUs using this power source~~',
	'Class:PDU' => 'PDU~~',
	'Class:PDU/Attribute:rack_id' => 'Rack~~',
	'Class:PDU/Attribute:rack_name' => 'Rack name~~',
	'Class:PDU/Attribute:powerstart_id' => 'Power start~~',
	'Class:PDU/Attribute:powerstart_name' => 'Power start name~~',
	'Class:Peripheral' => 'Peripheral~~',
	'Class:Enclosure' => 'Enclosure~~',
	'Class:Enclosure/Attribute:rack_id' => 'Rack~~',
	'Class:Enclosure/Attribute:rack_name' => 'Rack name~~',
	'Class:Enclosure/Attribute:nb_u' => 'Rack units~~',
	'Class:Enclosure/Attribute:device_list' => 'Devices~~',
	'Class:Enclosure/Attribute:device_list+' => 'All the devices in this enclosure~~',
	'Class:ApplicationSolution/Attribute:functionalcis_list' => 'CIs~~',
	'Class:ApplicationSolution/Attribute:functionalcis_list+' => 'All the configuration items that compose this application solution~~',
	'Class:ApplicationSolution/Attribute:businessprocess_list' => 'Business processes~~',
	'Class:ApplicationSolution/Attribute:businessprocess_list+' => 'All the business processes depending on this application solution~~',
	'Class:ApplicationSolution/Attribute:status' => 'Status~~',
	'Class:ApplicationSolution/Attribute:status/Value:active' => 'active~~',
	'Class:ApplicationSolution/Attribute:status/Value:active+' => 'active~~',
	'Class:ApplicationSolution/Attribute:status/Value:inactive' => 'inactive~~',
	'Class:ApplicationSolution/Attribute:status/Value:inactive+' => 'inactive~~',
	'Class:ApplicationSolution/Attribute:redundancy' => 'Impact analysis: configuration of the redundancy~~',
	'Class:ApplicationSolution/Attribute:redundancy/disabled' => 'The solution is up if all CIs are up~~',
	'Class:ApplicationSolution/Attribute:redundancy/count' => 'The solution is up if at least %1$s CI(s) is(are) up~~',
	'Class:ApplicationSolution/Attribute:redundancy/percent' => 'The solution is up if at least %1$s %% of the CIs are up~~',
	'Class:BusinessProcess/Attribute:applicationsolutions_list' => 'Application solutions~~',
	'Class:BusinessProcess/Attribute:applicationsolutions_list+' => 'All the application solutions that impact this business process~~',
	'Class:BusinessProcess/Attribute:status' => 'Status~~',
	'Class:BusinessProcess/Attribute:status/Value:active' => 'active~~',
	'Class:BusinessProcess/Attribute:status/Value:active+' => 'active~~',
	'Class:BusinessProcess/Attribute:status/Value:inactive' => 'inactive~~',
	'Class:BusinessProcess/Attribute:status/Value:inactive+' => 'inactive~~',
	'Class:SoftwareInstance/Attribute:system_id' => 'System~~',
	'Class:SoftwareInstance/Attribute:system_name' => 'System name~~',
	'Class:SoftwareInstance/Attribute:software_id' => 'Software~~',
	'Class:SoftwareInstance/Attribute:softwarelicence_id' => 'Software licence~~',
	'Class:SoftwareInstance/Attribute:softwarelicence_name' => 'Software licence name~~',
	'Class:SoftwareInstance/Attribute:path' => 'Path~~',
	'Class:SoftwareInstance/Attribute:status' => 'Status~~',
	'Class:SoftwareInstance/Attribute:status/Value:active' => 'active~~',
	'Class:SoftwareInstance/Attribute:status/Value:active+' => 'active~~',
	'Class:SoftwareInstance/Attribute:status/Value:inactive' => 'inactive~~',
	'Class:SoftwareInstance/Attribute:status/Value:inactive+' => 'inactive~~',
	'Class:Middleware' => 'Middleware~~',
	'Class:Middleware/Attribute:middlewareinstance_list' => 'Middleware instances~~',
	'Class:Middleware/Attribute:middlewareinstance_list+' => 'All the middleware instances provided by this middleware~~',
	'Class:DBServer/Attribute:dbschema_list' => 'DB schemas~~',
	'Class:DBServer/Attribute:dbschema_list+' => 'All the database schemas for this DB server~~',
	'Class:WebServer' => 'Web server~~',
	'Class:WebServer/Attribute:webapp_list' => 'Web applications~~',
	'Class:WebServer/Attribute:webapp_list+' => 'All the web applications available on this web server~~',
	'Class:PCSoftware' => 'PC Software~~',
	'Class:OtherSoftware' => 'Other Software~~',
	'Class:MiddlewareInstance' => 'Middleware Instance~~',
	'Class:MiddlewareInstance/Attribute:middleware_id' => 'Middleware~~',
	'Class:MiddlewareInstance/Attribute:middleware_name' => 'Middleware name~~',
	'Class:DatabaseSchema' => 'Database Schema~~',
	'Class:DatabaseSchema/Attribute:dbserver_id' => 'DB server~~',
	'Class:DatabaseSchema/Attribute:dbserver_name' => 'DB server name~~',
	'Class:WebApplication' => 'Web Application~~',
	'Class:WebApplication/Attribute:webserver_id' => 'Web server~~',
	'Class:WebApplication/Attribute:webserver_name' => 'Web server name~~',
	'Class:WebApplication/Attribute:url' => 'URL~~',
	'Class:VirtualDevice' => 'Virtual Device~~',
	'Class:VirtualDevice/Attribute:status' => 'Status~~',
	'Class:VirtualDevice/Attribute:status/Value:implementation' => 'implementation~~',
	'Class:VirtualDevice/Attribute:status/Value:implementation+' => 'implementation~~',
	'Class:VirtualDevice/Attribute:status/Value:obsolete' => 'obsolete~~',
	'Class:VirtualDevice/Attribute:status/Value:obsolete+' => 'obsolete~~',
	'Class:VirtualDevice/Attribute:status/Value:production' => 'production~~',
	'Class:VirtualDevice/Attribute:status/Value:production+' => 'production~~',
	'Class:VirtualDevice/Attribute:status/Value:stock' => 'stock~~',
	'Class:VirtualDevice/Attribute:status/Value:stock+' => 'stock~~',
	'Class:VirtualDevice/Attribute:logicalvolumes_list' => 'Logical volumes~~',
	'Class:VirtualDevice/Attribute:logicalvolumes_list+' => 'All the logical volumes used by this device~~',
	'Class:VirtualHost' => 'Virtual Host~~',
	'Class:VirtualHost/Attribute:virtualmachine_list' => 'Virtual machines~~',
	'Class:VirtualHost/Attribute:virtualmachine_list+' => 'All the virtual machines hosted by this host~~',
	'Class:Hypervisor' => 'Hypervisor~~',
	'Class:Hypervisor/Attribute:farm_id' => 'Farm~~',
	'Class:Hypervisor/Attribute:farm_name' => 'Farm name~~',
	'Class:Hypervisor/Attribute:server_id' => 'Server~~',
	'Class:Hypervisor/Attribute:server_name' => 'Server name~~',
	'Class:Farm' => 'Farm~~',
	'Class:Farm/Attribute:hypervisor_list' => 'Hypervisors~~',
	'Class:Farm/Attribute:hypervisor_list+' => 'All the hypervisors that compose this farm~~',
	'Class:Farm/Attribute:redundancy' => 'High availability~~',
	'Class:Farm/Attribute:redundancy/disabled' => 'The farm is up if all the hypervisors are up~~',
	'Class:Farm/Attribute:redundancy/count' => 'The farm is up if at least %1$s hypervisor(s) is(are) up~~',
	'Class:Farm/Attribute:redundancy/percent' => 'The farm is up if at least %1$s %% of the hypervisors are up~~',
	'Class:VirtualMachine' => 'Virtual Machine~~',
	'Class:VirtualMachine/Attribute:virtualhost_id' => 'Virtual host~~',
	'Class:VirtualMachine/Attribute:virtualhost_name' => 'Virtual host name~~',
	'Class:VirtualMachine/Attribute:osfamily_id' => 'OS family~~',
	'Class:VirtualMachine/Attribute:osfamily_name' => 'OS family name~~',
	'Class:VirtualMachine/Attribute:osversion_id' => 'OS version~~',
	'Class:VirtualMachine/Attribute:osversion_name' => 'OS version name~~',
	'Class:VirtualMachine/Attribute:oslicence_id' => 'OS licence~~',
	'Class:VirtualMachine/Attribute:oslicence_name' => 'OS licence name~~',
	'Class:VirtualMachine/Attribute:cpu' => 'CPU~~',
	'Class:VirtualMachine/Attribute:ram' => 'RAM~~',
	'Class:VirtualMachine/Attribute:managementip' => 'IP~~',
	'Class:VirtualMachine/Attribute:logicalinterface_list' => 'Network Interfaces~~',
	'Class:VirtualMachine/Attribute:logicalinterface_list+' => 'All the logical network interfaces~~',
	'Class:LogicalVolume' => 'Logical Volume~~',
	'Class:LogicalVolume/Attribute:name' => 'Name~~',
	'Class:LogicalVolume/Attribute:lun_id' => 'LUN ID~~',
	'Class:LogicalVolume/Attribute:description' => 'Description~~',
	'Class:LogicalVolume/Attribute:raid_level' => 'Raid level~~',
	'Class:LogicalVolume/Attribute:size' => 'Size~~',
	'Class:LogicalVolume/Attribute:storagesystem_id' => 'Storage system~~',
	'Class:LogicalVolume/Attribute:storagesystem_name' => 'Storage system name~~',
	'Class:LogicalVolume/Attribute:servers_list' => 'Servers~~',
	'Class:LogicalVolume/Attribute:servers_list+' => 'All the servers using this volume~~',
	'Class:LogicalVolume/Attribute:virtualdevices_list' => 'Virtual devices~~',
	'Class:LogicalVolume/Attribute:virtualdevices_list+' => 'All the virtual devices using this volume~~',
	'Class:lnkServerToVolume' => 'Link Server / Volume~~',
	'Class:lnkServerToVolume/Attribute:volume_id' => 'Volume~~',
	'Class:lnkServerToVolume/Attribute:volume_name' => 'Volume name~~',
	'Class:lnkServerToVolume/Attribute:server_id' => 'Server~~',
	'Class:lnkServerToVolume/Attribute:server_name' => 'Server name~~',
	'Class:lnkServerToVolume/Attribute:size_used' => 'Size used~~',
	'Class:lnkVirtualDeviceToVolume' => 'Link Virtual Device / Volume~~',
	'Class:lnkVirtualDeviceToVolume/Attribute:volume_id' => 'Volume~~',
	'Class:lnkVirtualDeviceToVolume/Attribute:volume_name' => 'Volume name~~',
	'Class:lnkVirtualDeviceToVolume/Attribute:virtualdevice_id' => 'Virtual device~~',
	'Class:lnkVirtualDeviceToVolume/Attribute:virtualdevice_name' => 'Virtual device name~~',
	'Class:lnkVirtualDeviceToVolume/Attribute:size_used' => 'Size used~~',
	'Class:lnkSanToDatacenterDevice' => 'Link SAN / Datacenter Device~~',
	'Class:lnkSanToDatacenterDevice/Attribute:san_id' => 'SAN switch~~',
	'Class:lnkSanToDatacenterDevice/Attribute:san_name' => 'SAN switch name~~',
	'Class:lnkSanToDatacenterDevice/Attribute:datacenterdevice_id' => 'Device~~',
	'Class:lnkSanToDatacenterDevice/Attribute:datacenterdevice_name' => 'Device name~~',
	'Class:lnkSanToDatacenterDevice/Attribute:san_port' => 'SAN fc~~',
	'Class:lnkSanToDatacenterDevice/Attribute:datacenterdevice_port' => 'Device fc~~',
	'Class:Tape' => 'Tape~~',
	'Class:Tape/Attribute:name' => 'Name~~',
	'Class:Tape/Attribute:description' => 'Description~~',
	'Class:Tape/Attribute:size' => 'Size~~',
	'Class:Tape/Attribute:tapelibrary_id' => 'Tape library~~',
	'Class:Tape/Attribute:tapelibrary_name' => 'Tape library name~~',
	'Class:NASFileSystem' => 'NAS File System~~',
	'Class:NASFileSystem/Attribute:name' => 'Name~~',
	'Class:NASFileSystem/Attribute:description' => 'Description~~',
	'Class:NASFileSystem/Attribute:raid_level' => 'Raid level~~',
	'Class:NASFileSystem/Attribute:size' => 'Size~~',
	'Class:NASFileSystem/Attribute:nas_id' => 'NAS~~',
	'Class:NASFileSystem/Attribute:nas_name' => 'NAS name~~',
	'Class:Software/Attribute:vendor' => 'vendor~~',
	'Class:Software/Attribute:version' => 'Version~~',
	'Class:Software/Attribute:documents_list' => 'Documents~~',
	'Class:Software/Attribute:documents_list+' => 'All the documents linked to this software~~',
	'Class:Software/Attribute:type' => 'Type~~',
	'Class:Software/Attribute:type/Value:DBServer' => 'DB Server~~',
	'Class:Software/Attribute:type/Value:DBServer+' => 'DB Server~~',
	'Class:Software/Attribute:type/Value:Middleware' => 'Middleware~~',
	'Class:Software/Attribute:type/Value:Middleware+' => 'Middleware~~',
	'Class:Software/Attribute:type/Value:OtherSoftware' => 'Other Software~~',
	'Class:Software/Attribute:type/Value:OtherSoftware+' => 'Other Software~~',
	'Class:Software/Attribute:type/Value:PCSoftware' => 'PC Software~~',
	'Class:Software/Attribute:type/Value:PCSoftware+' => 'PC Software~~',
	'Class:Software/Attribute:type/Value:WebServer' => 'Web Server~~',
	'Class:Software/Attribute:type/Value:WebServer+' => 'Web Server~~',
	'Class:Software/Attribute:softwareinstance_list' => 'Software Instances~~',
	'Class:Software/Attribute:softwareinstance_list+' => 'All the software instances for this software~~',
	'Class:Software/Attribute:softwarepatch_list' => 'Software Patches~~',
	'Class:Software/Attribute:softwarepatch_list+' => 'All the patchs for this software~~',
	'Class:Software/Attribute:softwarelicence_list' => 'Software Licences~~',
	'Class:Software/Attribute:softwarelicence_list+' => 'All the licences for this software~~',
	'Class:Patch/Attribute:documents_list' => 'Documents~~',
	'Class:Patch/Attribute:documents_list+' => 'All the documents linked to this patch~~',
	'Class:Patch/Attribute:finalclass' => 'Type~~',
	'Class:OSPatch' => 'OS Patch~~',
	'Class:OSPatch/Attribute:functionalcis_list' => 'Devices~~',
	'Class:OSPatch/Attribute:functionalcis_list+' => 'All the systems where this patch is installed~~',
	'Class:OSPatch/Attribute:osversion_id' => 'OS version~~',
	'Class:OSPatch/Attribute:osversion_name' => 'OS version name~~',
	'Class:SoftwarePatch' => 'Software Patch~~',
	'Class:SoftwarePatch/Attribute:software_id' => 'Software~~',
	'Class:SoftwarePatch/Attribute:software_name' => 'Software name~~',
	'Class:SoftwarePatch/Attribute:softwareinstances_list' => 'Software instances~~',
	'Class:SoftwarePatch/Attribute:softwareinstances_list+' => 'All the systems where this software patch is installed~~',
	'Class:Licence/Attribute:documents_list' => 'Documents~~',
	'Class:Licence/Attribute:documents_list+' => 'All the documents linked to this licence~~',
	'Class:Licence/Attribute:organization_name' => 'Organization name~~',
	'Class:Licence/Attribute:organization_name+' => 'Common name~~',
	'Class:Licence/Attribute:description' => 'Description~~',
	'Class:Licence/Attribute:start_date' => 'Start date~~',
	'Class:Licence/Attribute:end_date' => 'End date~~',
	'Class:Licence/Attribute:perpetual' => 'Perpetual~~',
	'Class:Licence/Attribute:perpetual/Value:no' => 'no~~',
	'Class:Licence/Attribute:perpetual/Value:no+' => 'no~~',
	'Class:Licence/Attribute:perpetual/Value:yes' => 'yes~~',
	'Class:Licence/Attribute:perpetual/Value:yes+' => 'yes~~',
	'Class:Licence/Attribute:finalclass' => 'Type~~',
	'Class:OSLicence' => 'OS Licence~~',
	'Class:OSLicence/Attribute:osversion_id' => 'OS version~~',
	'Class:OSLicence/Attribute:osversion_name' => 'OS version name~~',
	'Class:OSLicence/Attribute:virtualmachines_list' => 'Virtual machines~~',
	'Class:OSLicence/Attribute:virtualmachines_list+' => 'All the virtual machines where this licence is used~~',
	'Class:OSLicence/Attribute:servers_list' => 'servers~~',
	'Class:OSLicence/Attribute:servers_list+' => 'All the servers where this licence is used~~',
	'Class:SoftwareLicence' => 'Software Licence~~',
	'Class:SoftwareLicence/Attribute:software_id' => 'Software~~',
	'Class:SoftwareLicence/Attribute:software_name' => 'Software name~~',
	'Class:SoftwareLicence/Attribute:softwareinstance_list' => 'Software instances~~',
	'Class:SoftwareLicence/Attribute:softwareinstance_list+' => 'All the systems where this licence is used~~',
	'Class:lnkDocumentToLicence' => 'Link Document / Licence~~',
	'Class:lnkDocumentToLicence/Attribute:licence_id' => 'Licence~~',
	'Class:lnkDocumentToLicence/Attribute:licence_name' => 'Licence name~~',
	'Class:lnkDocumentToLicence/Attribute:document_id' => 'Document~~',
	'Class:lnkDocumentToLicence/Attribute:document_name' => 'Document name~~',
	'Class:Typology' => 'Typology~~',
	'Class:Typology/Attribute:name' => 'Name~~',
	'Class:Typology/Attribute:finalclass' => 'Type~~',
	'Class:OSVersion' => 'OS Version~~',
	'Class:OSVersion/Attribute:osfamily_id' => 'OS family~~',
	'Class:OSVersion/Attribute:osfamily_name' => 'OS family name~~',
	'Class:OSFamily' => 'OS Family~~',
	'Class:DocumentType' => 'Document Type~~',
	'Class:ContactType' => 'Contact Type~~',
	'Class:Brand' => 'Brand~~',
	'Class:Brand/Attribute:physicaldevices_list' => 'Physical devices~~',
	'Class:Brand/Attribute:physicaldevices_list+' => 'All the physical devices corresponding to this brand~~',
	'Class:Model' => 'Model~~',
	'Class:Model/Attribute:brand_id' => 'Brand~~',
	'Class:Model/Attribute:brand_name' => 'Brand name~~',
	'Class:Model/Attribute:type' => 'Device type~~',
	'Class:Model/Attribute:type/Value:PowerSource' => 'Power Source~~',
	'Class:Model/Attribute:type/Value:PowerSource+' => 'Power Source~~',
	'Class:Model/Attribute:type/Value:DiskArray' => 'Disk Array~~',
	'Class:Model/Attribute:type/Value:DiskArray+' => 'Disk Array~~',
	'Class:Model/Attribute:type/Value:Enclosure' => 'Enclosure~~',
	'Class:Model/Attribute:type/Value:Enclosure+' => 'Enclosure~~',
	'Class:Model/Attribute:type/Value:IPPhone' => 'IP Phone~~',
	'Class:Model/Attribute:type/Value:IPPhone+' => 'IP Phone~~',
	'Class:Model/Attribute:type/Value:MobilePhone' => 'Mobile Phone~~',
	'Class:Model/Attribute:type/Value:MobilePhone+' => 'Mobile Phone~~',
	'Class:Model/Attribute:type/Value:NAS' => 'NAS~~',
	'Class:Model/Attribute:type/Value:NAS+' => 'NAS~~',
	'Class:Model/Attribute:type/Value:NetworkDevice' => 'Network Device~~',
	'Class:Model/Attribute:type/Value:NetworkDevice+' => 'Network Device~~',
	'Class:Model/Attribute:type/Value:PC' => 'PC~~',
	'Class:Model/Attribute:type/Value:PC+' => 'PC~~',
	'Class:Model/Attribute:type/Value:PDU' => 'PDU~~',
	'Class:Model/Attribute:type/Value:PDU+' => 'PDU~~',
	'Class:Model/Attribute:type/Value:Peripheral' => 'Peripheral~~',
	'Class:Model/Attribute:type/Value:Peripheral+' => 'Peripheral~~',
	'Class:Model/Attribute:type/Value:Printer' => 'Printer~~',
	'Class:Model/Attribute:type/Value:Printer+' => 'Printer~~',
	'Class:Model/Attribute:type/Value:Rack' => 'Rack~~',
	'Class:Model/Attribute:type/Value:Rack+' => 'Rack~~',
	'Class:Model/Attribute:type/Value:SANSwitch' => 'SAN switch~~',
	'Class:Model/Attribute:type/Value:SANSwitch+' => 'SAN switch~~',
	'Class:Model/Attribute:type/Value:Server' => 'Server~~',
	'Class:Model/Attribute:type/Value:Server+' => 'Server~~',
	'Class:Model/Attribute:type/Value:StorageSystem' => 'Storage System~~',
	'Class:Model/Attribute:type/Value:StorageSystem+' => 'Storage System~~',
	'Class:Model/Attribute:type/Value:Tablet' => 'Tablet~~',
	'Class:Model/Attribute:type/Value:Tablet+' => 'Tablet~~',
	'Class:Model/Attribute:type/Value:TapeLibrary' => 'Tape Library~~',
	'Class:Model/Attribute:type/Value:TapeLibrary+' => 'Tape Library~~',
	'Class:Model/Attribute:type/Value:Phone' => 'Telephone~~',
	'Class:Model/Attribute:type/Value:Phone+' => 'Telephone~~',
	'Class:Model/Attribute:physicaldevices_list' => 'Physical devices~~',
	'Class:Model/Attribute:physicaldevices_list+' => 'All the physical devices corresponding to this model~~',
	'Class:NetworkDeviceType' => 'Network Device Type~~',
	'Class:NetworkDeviceType/Attribute:networkdevicesdevices_list' => 'Network devices~~',
	'Class:NetworkDeviceType/Attribute:networkdevicesdevices_list+' => 'All the network devices corresponding to this type~~',
	'Class:IOSVersion' => 'IOS Version~~',
	'Class:IOSVersion/Attribute:brand_id' => 'Brand~~',
	'Class:IOSVersion/Attribute:brand_name' => 'Brand name~~',
	'Class:lnkDocumentToPatch' => 'Link Document / Patch~~',
	'Class:lnkDocumentToPatch/Attribute:patch_id' => 'Patch~~',
	'Class:lnkDocumentToPatch/Attribute:patch_name' => 'Patch name~~',
	'Class:lnkDocumentToPatch/Attribute:document_id' => 'Document~~',
	'Class:lnkDocumentToPatch/Attribute:document_name' => 'Document name~~',
	'Class:lnkSoftwareInstanceToSoftwarePatch' => 'Link Software Instance / Software Patch~~',
	'Class:lnkSoftwareInstanceToSoftwarePatch/Attribute:softwarepatch_id' => 'Software patch~~',
	'Class:lnkSoftwareInstanceToSoftwarePatch/Attribute:softwarepatch_name' => 'Software patch name~~',
	'Class:lnkSoftwareInstanceToSoftwarePatch/Attribute:softwareinstance_id' => 'Software instance~~',
	'Class:lnkSoftwareInstanceToSoftwarePatch/Attribute:softwareinstance_name' => 'Software instance name~~',
	'Class:lnkFunctionalCIToOSPatch' => 'Link FunctionalCI / OS patch~~',
	'Class:lnkFunctionalCIToOSPatch/Attribute:ospatch_id' => 'OS patch~~',
	'Class:lnkFunctionalCIToOSPatch/Attribute:ospatch_name' => 'OS patch name~~',
	'Class:lnkFunctionalCIToOSPatch/Attribute:functionalci_id' => 'Functionalci~~',
	'Class:lnkFunctionalCIToOSPatch/Attribute:functionalci_name' => 'Functionalci name~~',
	'Class:lnkDocumentToSoftware' => 'Link Document / Software~~',
	'Class:lnkDocumentToSoftware/Attribute:software_id' => 'Software~~',
	'Class:lnkDocumentToSoftware/Attribute:software_name' => 'Software name~~',
	'Class:lnkDocumentToSoftware/Attribute:document_id' => 'Document~~',
	'Class:lnkDocumentToSoftware/Attribute:document_name' => 'Document name~~',
	'Class:lnkContactToFunctionalCI' => 'Link Contact / FunctionalCI~~',
	'Class:lnkContactToFunctionalCI/Attribute:functionalci_id' => 'Functionalci~~',
	'Class:lnkContactToFunctionalCI/Attribute:functionalci_name' => 'Functionalci name~~',
	'Class:lnkContactToFunctionalCI/Attribute:contact_id' => 'Contact~~',
	'Class:lnkContactToFunctionalCI/Attribute:contact_name' => 'Contact name~~',
	'Class:lnkDocumentToFunctionalCI' => 'Link Document / FunctionalCI~~',
	'Class:lnkDocumentToFunctionalCI/Attribute:functionalci_id' => 'Functionalci~~',
	'Class:lnkDocumentToFunctionalCI/Attribute:functionalci_name' => 'Functionalci name~~',
	'Class:lnkDocumentToFunctionalCI/Attribute:document_id' => 'Document~~',
	'Class:lnkDocumentToFunctionalCI/Attribute:document_name' => 'Document name~~',
	'Class:Subnet/Attribute:subnet_name' => 'Subnet name~~',
	'Class:Subnet/Attribute:org_name' => 'Name~~',
	'Class:Subnet/Attribute:org_name+' => 'Common name~~',
	'Class:Subnet/Attribute:vlans_list' => 'VLANs~~',
	'Class:VLAN' => 'VLAN~~',
	'Class:VLAN/Attribute:vlan_tag' => 'VLAN Tag~~',
	'Class:VLAN/Attribute:description' => 'Description~~',
	'Class:VLAN/Attribute:org_id' => 'Organization~~',
	'Class:VLAN/Attribute:org_name' => 'Organization name~~',
	'Class:VLAN/Attribute:org_name+' => 'Common name~~',
	'Class:VLAN/Attribute:subnets_list' => 'Subnets~~',
	'Class:VLAN/Attribute:physicalinterfaces_list' => 'Physical network interfaces~~',
	'Class:lnkSubnetToVLAN' => 'Link Subnet / VLAN~~',
	'Class:lnkSubnetToVLAN/Attribute:subnet_id' => 'Subnet~~',
	'Class:lnkSubnetToVLAN/Attribute:subnet_ip' => 'Subnet IP~~',
	'Class:lnkSubnetToVLAN/Attribute:subnet_name' => 'Subnet name~~',
	'Class:lnkSubnetToVLAN/Attribute:vlan_id' => 'VLAN~~',
	'Class:lnkSubnetToVLAN/Attribute:vlan_tag' => 'VLAN Tag~~',
	'Class:NetworkInterface/Attribute:name' => 'Name~~',
	'Class:NetworkInterface/Attribute:finalclass' => 'Type~~',
	'Class:IPInterface' => 'IP Interface~~',
	'Class:IPInterface/Attribute:ipaddress' => 'IP address~~',
	'Class:IPInterface/Attribute:macaddress' => 'MAC address~~',
	'Class:IPInterface/Attribute:comment' => 'Comment~~',
	'Class:IPInterface/Attribute:ipgateway' => 'IP gateway~~',
	'Class:IPInterface/Attribute:ipmask' => 'IP mask~~',
	'Class:IPInterface/Attribute:speed' => 'Speed~~',
	'Class:PhysicalInterface' => 'Physical Interface~~',
	'Class:PhysicalInterface/Attribute:connectableci_id' => 'Device~~',
	'Class:PhysicalInterface/Attribute:connectableci_name' => 'Device name~~',
	'Class:PhysicalInterface/Attribute:vlans_list' => 'VLANs~~',
	'Class:lnkPhysicalInterfaceToVLAN' => 'Link PhysicalInterface / VLAN~~',
	'Class:lnkPhysicalInterfaceToVLAN/Attribute:physicalinterface_id' => 'Physical Interface~~',
	'Class:lnkPhysicalInterfaceToVLAN/Attribute:physicalinterface_name' => 'Physical Interface Name~~',
	'Class:lnkPhysicalInterfaceToVLAN/Attribute:physicalinterface_device_id' => 'Device~~',
	'Class:lnkPhysicalInterfaceToVLAN/Attribute:physicalinterface_device_name' => 'Device name~~',
	'Class:lnkPhysicalInterfaceToVLAN/Attribute:vlan_id' => 'VLAN~~',
	'Class:lnkPhysicalInterfaceToVLAN/Attribute:vlan_tag' => 'VLAN Tag~~',
	'Class:LogicalInterface' => 'Logical Interface~~',
	'Class:LogicalInterface/Attribute:virtualmachine_id' => 'Virtual machine~~',
	'Class:LogicalInterface/Attribute:virtualmachine_name' => 'Virtual machine name~~',
	'Class:FiberChannelInterface' => 'Fiber Channel Interface~~',
	'Class:FiberChannelInterface/Attribute:speed' => 'Speed~~',
	'Class:FiberChannelInterface/Attribute:topology' => 'Topology~~',
	'Class:FiberChannelInterface/Attribute:wwn' => 'WWN~~',
	'Class:FiberChannelInterface/Attribute:datacenterdevice_id' => 'Device~~',
	'Class:FiberChannelInterface/Attribute:datacenterdevice_name' => 'Device name~~',
	'Class:lnkConnectableCIToNetworkDevice' => 'Link ConnectableCI / NetworkDevice~~',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:networkdevice_id' => 'Network device~~',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:networkdevice_name' => 'Network device name~~',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:connectableci_id' => 'Connected device~~',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:connectableci_name' => 'Connected device name~~',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:network_port' => 'Network port~~',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:device_port' => 'Device port~~',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:connection_type' => 'Connection type~~',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:connection_type/Value:downlink' => 'down link~~',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:connection_type/Value:downlink+' => 'down link~~',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:connection_type/Value:uplink' => 'up link~~',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:connection_type/Value:uplink+' => 'up link~~',
	'Class:lnkApplicationSolutionToFunctionalCI' => 'Link ApplicationSolution / FunctionalCI~~',
	'Class:lnkApplicationSolutionToFunctionalCI/Attribute:applicationsolution_id' => 'Application solution~~',
	'Class:lnkApplicationSolutionToFunctionalCI/Attribute:applicationsolution_name' => 'Application solution name~~',
	'Class:lnkApplicationSolutionToFunctionalCI/Attribute:functionalci_id' => 'Functionalci~~',
	'Class:lnkApplicationSolutionToFunctionalCI/Attribute:functionalci_name' => 'Functionalci name~~',
	'Class:lnkApplicationSolutionToBusinessProcess' => 'Link ApplicationSolution / BusinessProcess~~',
	'Class:lnkApplicationSolutionToBusinessProcess/Attribute:businessprocess_id' => 'Business process~~',
	'Class:lnkApplicationSolutionToBusinessProcess/Attribute:businessprocess_name' => 'Business process name~~',
	'Class:lnkApplicationSolutionToBusinessProcess/Attribute:applicationsolution_id' => 'Application solution~~',
	'Class:lnkApplicationSolutionToBusinessProcess/Attribute:applicationsolution_name' => 'Application solution name~~',
	'Class:lnkPersonToTeam' => 'Link Person / Team~~',
	'Class:lnkPersonToTeam/Attribute:team_id' => 'Team~~',
	'Class:lnkPersonToTeam/Attribute:team_name' => 'Team name~~',
	'Class:lnkPersonToTeam/Attribute:person_id' => 'Person~~',
	'Class:lnkPersonToTeam/Attribute:person_name' => 'Person name~~',
	'Class:lnkPersonToTeam/Attribute:role_id' => 'Role~~',
	'Class:lnkPersonToTeam/Attribute:role_name' => 'Role name~~',
	'Class:Group/Attribute:parent_id_friendlyname' => 'Parent Group~~',
	'Menu:ConfigManagement:virtualization' => 'Virtualization~~',
	'Menu:ConfigManagement:EndUsers' => 'End user devices~~',
	'Menu:Typology' => 'Typology configuration~~',
	'Menu:Typology+' => 'Typology configuration~~',
	'Menu:OSVersion' => 'OS versions~~',
	'Menu:Software' => 'Software catalog~~',
	'Menu:Software+' => 'Software catalog~~',
	'UI_WelcomeMenu_AllConfigItems' => 'Summary~~',
	'Menu:ConfigManagement:Typology' => 'Typology configuration~~',
	'Server:baseinfo' => 'General information~~',
	'Server:Date' => 'Dates~~',
	'Server:moreinfo' => 'More information~~',
	'Server:otherinfo' => 'Other information~~',
	'Server:power' => 'Power supply~~',
	'Person:info' => 'General information~~',
	'Person:notifiy' => 'Notification~~',
));
?>
