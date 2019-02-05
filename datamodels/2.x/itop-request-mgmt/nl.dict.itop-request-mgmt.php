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
 * @author	LinProfs <info@linprofs.com>
 * 
 * Linux & Open Source Professionals
 * http://www.linprofs.com
 * 
 * @copyright   Copyright (C) 2010-2012 Combodo SARL
 * @licence	http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('NL NL', 'Dutch', 'Nederlands', array(
	'Menu:RequestManagement' => 'Helpdesk',
	'Menu:RequestManagement+' => 'Helpdesk',
	'Menu:RequestManagementProvider' => 'Helpdesk leverancier',
	'Menu:RequestManagementProvider+' => 'Helpdesk leverancier',
	'Menu:UserRequest:Provider' => 'Open verzoeken Open requests overgebracht naar leverancier',
	'Menu:UserRequest:Provider+' => 'Open verzoeken Open requests overgebracht naar leverancier',
	'Menu:UserRequest:Overview' => 'Overzicht',
	'Menu:UserRequest:Overview+' => 'Overzicht',
	'Menu:NewUserRequest' => 'Nieuw gebruikersverzoek',
	'Menu:NewUserRequest+' => 'Maak een nieuwe gebruikersverzoek ticket aan',
	'Menu:SearchUserRequests' => 'Zoek naar gebruikersverzoeken',
	'Menu:SearchUserRequests+' => 'Zoek naar gebruikersverzoeken',
	'Menu:UserRequest:Shortcuts' => 'Snelkoppelingen',
	'Menu:UserRequest:Shortcuts+' => '',
	'Menu:UserRequest:MyRequests' => 'Verzoeken toegewezen aan mij',
	'Menu:UserRequest:MyRequests+' => 'Verzoeken toegewezen aan mij (als Agent)',
	'Menu:UserRequest:MySupportRequests' => 'Mijn support gesprekken',
	'Menu:UserRequest:MySupportRequests+' => 'Mijn support gesprekken',
	'Menu:UserRequest:EscalatedRequests' => 'Hot requests',
	'Menu:UserRequest:EscalatedRequests+' => 'Hot requests',
	'Menu:UserRequest:OpenRequests' => 'Alle open verzoeken',
	'Menu:UserRequest:OpenRequests+' => 'Alle open verzoeken',
	'UI:WelcomeMenu:MyAssignedCalls' => 'Verzoeken toegewezen aan mij',
	'UI-RequestManagementOverview-RequestByType-last-14-days' => 'Verzoeken van de afgelopen 14 dagen (per type)',
	'UI-RequestManagementOverview-Last-14-days' => 'Verzoeken van de afgelopen 14 dagen (per dag)',
	'UI-RequestManagementOverview-OpenRequestByStatus' => 'Open verzoeken per status',
	'UI-RequestManagementOverview-OpenRequestByAgent' => 'Open verzoeken per medewerker',
	'UI-RequestManagementOverview-OpenRequestByType' => 'Open verzoeken per type',
	'UI-RequestManagementOverview-OpenRequestByCustomer' => 'Open verzoeken per organisatie',
	'Class:UserRequest:KnownErrorList' => 'Bekende fouten',
	'Menu:UserRequest:MyWorkOrders' => 'Work orders toegewezen aan mij',
	'Menu:UserRequest:MyWorkOrders+' => 'Alle work orders toegewezen aan mij',
	'Class:Problem:KnownProblemList' => 'Bekende fouten',
));

// Dictionnay conventions
// Class:<class_name>
// Class:<class_name>+
// Class:<class_name>/Attribute:<attribute_code>
// Class:<class_name>/Attribute:<attribute_code>+
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>+
// Class:<class_name>/Stimulus:<stimulus_code>
// Class:<class_name>/Stimulus:<stimulus_code>+

//
// Class: UserRequest
//

Dict::Add('NL NL', 'Dutch', 'Nederlands', array(
	'Class:UserRequest' => 'Gebruikersverzoek',
	'Class:UserRequest+' => '',
	'Class:UserRequest/Attribute:status' => 'Status',
	'Class:UserRequest/Attribute:status+' => '',
	'Class:UserRequest/Attribute:status/Value:new' => 'Nieuw',
	'Class:UserRequest/Attribute:status/Value:new+' => '',
	'Class:UserRequest/Attribute:status/Value:escalated_tto' => 'Geëscaleerde TTO',
	'Class:UserRequest/Attribute:status/Value:escalated_tto+' => '',
	'Class:UserRequest/Attribute:status/Value:assigned' => 'Toegewezen',
	'Class:UserRequest/Attribute:status/Value:assigned+' => '',
	'Class:UserRequest/Attribute:status/Value:escalated_ttr' => 'Geëscaleerde TTR',
	'Class:UserRequest/Attribute:status/Value:escalated_ttr+' => '',
	'Class:UserRequest/Attribute:status/Value:waiting_for_approval' => 'Wacht voor goedkeuring',
	'Class:UserRequest/Attribute:status/Value:waiting_for_approval+' => '',
	'Class:UserRequest/Attribute:status/Value:approved' => 'Goedgekeurd',
	'Class:UserRequest/Attribute:status/Value:approved+' => '',
	'Class:UserRequest/Attribute:status/Value:rejected' => 'Afgewezen',
	'Class:UserRequest/Attribute:status/Value:rejected+' => '',
	'Class:UserRequest/Attribute:status/Value:pending' => 'In afwachting van',
	'Class:UserRequest/Attribute:status/Value:pending+' => '',
	'Class:UserRequest/Attribute:status/Value:resolved' => 'Opgelost',
	'Class:UserRequest/Attribute:status/Value:resolved+' => '',
	'Class:UserRequest/Attribute:status/Value:closed' => 'Gesloten',
	'Class:UserRequest/Attribute:status/Value:closed+' => '',
	'Class:UserRequest/Attribute:request_type' => 'Verzoek Type',
	'Class:UserRequest/Attribute:request_type+' => '',
	'Class:UserRequest/Attribute:request_type/Value:incident' => 'Incident',
	'Class:UserRequest/Attribute:request_type/Value:incident+' => 'Incident',
	'Class:UserRequest/Attribute:request_type/Value:service_request' => 'Service request',
	'Class:UserRequest/Attribute:request_type/Value:service_request+' => 'Service request',
	'Class:UserRequest/Attribute:impact' => 'Impact',
	'Class:UserRequest/Attribute:impact+' => '',
	'Class:UserRequest/Attribute:impact/Value:1' => 'Een afdeling',
	'Class:UserRequest/Attribute:impact/Value:1+' => '',
	'Class:UserRequest/Attribute:impact/Value:2' => 'Een dienst',
	'Class:UserRequest/Attribute:impact/Value:2+' => '',
	'Class:UserRequest/Attribute:impact/Value:3' => 'Een persoon',
	'Class:UserRequest/Attribute:impact/Value:3+' => '',
	'Class:UserRequest/Attribute:priority' => 'Prioriteit',
	'Class:UserRequest/Attribute:priority+' => '',
	'Class:UserRequest/Attribute:priority/Value:1' => 'kritisch',
	'Class:UserRequest/Attribute:priority/Value:1+' => 'kritisch',
	'Class:UserRequest/Attribute:priority/Value:2' => 'hoog',
	'Class:UserRequest/Attribute:priority/Value:2+' => 'hoog',
	'Class:UserRequest/Attribute:priority/Value:3' => 'normaal',
	'Class:UserRequest/Attribute:priority/Value:3+' => 'normaal',
	'Class:UserRequest/Attribute:priority/Value:4' => 'laag',
	'Class:UserRequest/Attribute:priority/Value:4+' => 'laag',
	'Class:UserRequest/Attribute:urgency' => 'Urgentie',
	'Class:UserRequest/Attribute:urgency+' => '',
	'Class:UserRequest/Attribute:urgency/Value:1' => 'kritisch',
	'Class:UserRequest/Attribute:urgency/Value:1+' => 'kritisch',
	'Class:UserRequest/Attribute:urgency/Value:2' => 'hoog',
	'Class:UserRequest/Attribute:urgency/Value:2+' => 'hoog',
	'Class:UserRequest/Attribute:urgency/Value:3' => 'normaal',
	'Class:UserRequest/Attribute:urgency/Value:3+' => 'normaal',
	'Class:UserRequest/Attribute:urgency/Value:4' => 'laag',
	'Class:UserRequest/Attribute:urgency/Value:4+' => 'laag',
	'Class:UserRequest/Attribute:origin' => 'Afkomst',
	'Class:UserRequest/Attribute:origin+' => '',
	'Class:UserRequest/Attribute:origin/Value:mail' => 'mail',
	'Class:UserRequest/Attribute:origin/Value:mail+' => 'mail',
	'Class:UserRequest/Attribute:origin/Value:monitoring' => 'monitoring',
	'Class:UserRequest/Attribute:origin/Value:monitoring+' => 'monitoring',
	'Class:UserRequest/Attribute:origin/Value:phone' => 'telefoon',
	'Class:UserRequest/Attribute:origin/Value:phone+' => 'telefoon',
	'Class:UserRequest/Attribute:origin/Value:portal' => 'portal',
	'Class:UserRequest/Attribute:origin/Value:portal+' => 'portal',
	'Class:UserRequest/Attribute:approver_id' => 'Goedkeurder',
	'Class:UserRequest/Attribute:approver_id+' => '',
	'Class:UserRequest/Attribute:approver_email' => 'Goedkeurder Email',
	'Class:UserRequest/Attribute:approver_email+' => '',
	'Class:UserRequest/Attribute:service_id' => 'Dienst',
	'Class:UserRequest/Attribute:service_id+' => '',
	'Class:UserRequest/Attribute:service_name' => 'Dienst naam',
	'Class:UserRequest/Attribute:service_name+' => '',
	'Class:UserRequest/Attribute:servicesubcategory_id' => 'Dienst subcategorie',
	'Class:UserRequest/Attribute:servicesubcategory_id+' => '',
	'Class:UserRequest/Attribute:servicesubcategory_name' => 'Dienst subcategorie naam',
	'Class:UserRequest/Attribute:servicesubcategory_name+' => '',
	'Class:UserRequest/Attribute:escalation_flag' => 'Hot Flag',
	'Class:UserRequest/Attribute:escalation_flag+' => '',
	'Class:UserRequest/Attribute:escalation_flag/Value:no' => 'Nee',
	'Class:UserRequest/Attribute:escalation_flag/Value:no+' => 'Nee',
	'Class:UserRequest/Attribute:escalation_flag/Value:yes' => 'Ja',
	'Class:UserRequest/Attribute:escalation_flag/Value:yes+' => 'Ja',
	'Class:UserRequest/Attribute:escalation_reason' => 'Hot reason',
	'Class:UserRequest/Attribute:escalation_reason+' => '',
	'Class:UserRequest/Attribute:assignment_date' => 'Toegewezen datum',
	'Class:UserRequest/Attribute:assignment_date+' => '',
	'Class:UserRequest/Attribute:resolution_date' => 'Resolutie datum',
	'Class:UserRequest/Attribute:resolution_date+' => '',
	'Class:UserRequest/Attribute:last_pending_date' => 'Laatste pending date',
	'Class:UserRequest/Attribute:last_pending_date+' => '',
	'Class:UserRequest/Attribute:cumulatedpending' => 'cumulatedpending',
	'Class:UserRequest/Attribute:cumulatedpending+' => '',
	'Class:UserRequest/Attribute:tto' => 'TTO',
	'Class:UserRequest/Attribute:tto+' => '',
	'Class:UserRequest/Attribute:ttr' => 'TTR',
	'Class:UserRequest/Attribute:ttr+' => '',
	'Class:UserRequest/Attribute:tto_escalation_deadline' => 'TTO Deadline',
	'Class:UserRequest/Attribute:tto_escalation_deadline+' => '',
	'Class:UserRequest/Attribute:sla_tto_passed' => 'SLA tto gepasseerd',
	'Class:UserRequest/Attribute:sla_tto_passed+' => '',
	'Class:UserRequest/Attribute:sla_tto_over' => 'SLA tto over',
	'Class:UserRequest/Attribute:sla_tto_over+' => '',
	'Class:UserRequest/Attribute:ttr_escalation_deadline' => 'TTR Deadline',
	'Class:UserRequest/Attribute:ttr_escalation_deadline+' => '',
	'Class:UserRequest/Attribute:sla_ttr_passed' => 'SLA ttr gepasseerd',
	'Class:UserRequest/Attribute:sla_ttr_passed+' => '',
	'Class:UserRequest/Attribute:sla_ttr_over' => 'SLA ttr over',
	'Class:UserRequest/Attribute:sla_ttr_over+' => '',
	'Class:UserRequest/Attribute:time_spent' => 'Resolutie vertraging',
	'Class:UserRequest/Attribute:time_spent+' => '',
	'Class:UserRequest/Attribute:resolution_code' => 'Resolutie code',
	'Class:UserRequest/Attribute:resolution_code+' => '',
	'Class:UserRequest/Attribute:resolution_code/Value:assistance' => 'assistentie',
	'Class:UserRequest/Attribute:resolution_code/Value:assistance+' => 'assistentie',
	'Class:UserRequest/Attribute:resolution_code/Value:bug fixed' => 'bug opgelost',
	'Class:UserRequest/Attribute:resolution_code/Value:bug fixed+' => 'bug opgelost',
	'Class:UserRequest/Attribute:resolution_code/Value:hardware repair' => 'hardware gerepareerd',
	'Class:UserRequest/Attribute:resolution_code/Value:hardware repair+' => 'hardware gerepareerd',
	'Class:UserRequest/Attribute:resolution_code/Value:other' => 'anders',
	'Class:UserRequest/Attribute:resolution_code/Value:other+' => 'anders',
	'Class:UserRequest/Attribute:resolution_code/Value:software patch' => 'software patch',
	'Class:UserRequest/Attribute:resolution_code/Value:software patch+' => 'software patch',
	'Class:UserRequest/Attribute:resolution_code/Value:system update' => 'systeem update',
	'Class:UserRequest/Attribute:resolution_code/Value:system update+' => 'systeem update',
	'Class:UserRequest/Attribute:resolution_code/Value:training' => 'training',
	'Class:UserRequest/Attribute:resolution_code/Value:training+' => 'training',
	'Class:UserRequest/Attribute:solution' => 'Oplossing',
	'Class:UserRequest/Attribute:solution+' => '',
	'Class:UserRequest/Attribute:pending_reason' => 'Reden waarvoor het in afwachting staat',
	'Class:UserRequest/Attribute:pending_reason+' => '',
	'Class:UserRequest/Attribute:parent_request_id' => 'Hoofd aanvraag',
	'Class:UserRequest/Attribute:parent_request_id+' => '',
	'Class:UserRequest/Attribute:parent_request_ref' => 'Ref request',
	'Class:UserRequest/Attribute:parent_request_ref+' => '',
	'Class:UserRequest/Attribute:parent_problem_id' => 'Hoofd probleem',
	'Class:UserRequest/Attribute:parent_problem_id+' => '',
	'Class:UserRequest/Attribute:parent_problem_ref' => 'Ref problem',
	'Class:UserRequest/Attribute:parent_problem_ref+' => '',
	'Class:UserRequest/Attribute:parent_change_id' => 'Hoofd change',
	'Class:UserRequest/Attribute:parent_change_id+' => '',
	'Class:UserRequest/Attribute:parent_change_ref' => 'Ref change',
	'Class:UserRequest/Attribute:parent_change_ref+' => '',
	'Class:UserRequest/Attribute:related_request_list' => 'Sub Verzoeken',
	'Class:UserRequest/Attribute:related_request_list+' => 'Alle verzoeken die gelinkt zijn aan dit hoofdverzoek',
	'Class:UserRequest/Attribute:public_log' => 'Publieke log',
	'Class:UserRequest/Attribute:public_log+' => '',
	'Class:UserRequest/Attribute:user_satisfaction' => 'Klant tevredenheid',
	'Class:UserRequest/Attribute:user_satisfaction+' => '',
	'Class:UserRequest/Attribute:user_satisfaction/Value:1' => 'Erg tevreden',
	'Class:UserRequest/Attribute:user_satisfaction/Value:1+' => 'Erg tevreden',
	'Class:UserRequest/Attribute:user_satisfaction/Value:2' => 'Tevreden',
	'Class:UserRequest/Attribute:user_satisfaction/Value:2+' => 'Tevreden',
	'Class:UserRequest/Attribute:user_satisfaction/Value:3' => 'Ontevreden',
	'Class:UserRequest/Attribute:user_satisfaction/Value:3+' => 'Ontevreden',
	'Class:UserRequest/Attribute:user_satisfaction/Value:4' => 'Erg ontevreden',
	'Class:UserRequest/Attribute:user_satisfaction/Value:4+' => 'Erg ontevreden',
	'Class:UserRequest/Attribute:user_comment' => 'Gebruikersreactie',
	'Class:UserRequest/Attribute:user_comment+' => '',
	'Class:UserRequest/Attribute:parent_request_id_friendlyname' => 'parent_request_id_friendlyname',
	'Class:UserRequest/Attribute:parent_request_id_friendlyname+' => '',
	'Class:UserRequest/Stimulus:ev_assign' => 'Wijs toe',
	'Class:UserRequest/Stimulus:ev_assign+' => '',
	'Class:UserRequest/Stimulus:ev_reassign' => 'Wijs opnieuw toe',
	'Class:UserRequest/Stimulus:ev_reassign+' => '',
	'Class:UserRequest/Stimulus:ev_approve' => 'Keur goed',
	'Class:UserRequest/Stimulus:ev_approve+' => '',
	'Class:UserRequest/Stimulus:ev_reject' => 'Keur af',
	'Class:UserRequest/Stimulus:ev_reject+' => '',
	'Class:UserRequest/Stimulus:ev_pending' => 'In afwachting',
	'Class:UserRequest/Stimulus:ev_pending+' => '',
	'Class:UserRequest/Stimulus:ev_timeout' => 'Timeout',
	'Class:UserRequest/Stimulus:ev_timeout+' => '',
	'Class:UserRequest/Stimulus:ev_autoresolve' => 'Automatisch oplossen',
	'Class:UserRequest/Stimulus:ev_autoresolve+' => '',
	'Class:UserRequest/Stimulus:ev_autoclose' => 'Automatisch sluiten',
	'Class:UserRequest/Stimulus:ev_autoclose+' => '',
	'Class:UserRequest/Stimulus:ev_resolve' => 'Markeren als opgelost',
	'Class:UserRequest/Stimulus:ev_resolve+' => '',
	'Class:UserRequest/Stimulus:ev_close' => 'Sluit dit verzoek',
	'Class:UserRequest/Stimulus:ev_close+' => '',
	'Class:UserRequest/Stimulus:ev_reopen' => 'Her-open',
	'Class:UserRequest/Stimulus:ev_reopen+' => '',
	'Class:UserRequest/Stimulus:ev_wait_for_approval' => 'Wacht op goedkeuring',
	'Class:UserRequest/Stimulus:ev_wait_for_approval+' => '',
	'Class:UserRequest/Error:CannotAssignParentRequestIdToSelf' => 'Kan niet toewijzen aan hoofdverzoek en aan het verzoek zelf',
));


Dict::Add('NL NL', 'Dutch', 'Nederlands', array(
	'Portal:TitleDetailsFor_Request' => 'Details van het verzoek',
	'Portal:ButtonUpdate' => 'Update',
	'Portal:ButtonClose' => 'Sluit',
	'Portal:ButtonReopen' => 'Heropen',
	'Portal:ShowServices' => 'Dienst catalogus',
	'Portal:SelectRequestType' => 'Selecteer een type verzoek',
	'Portal:SelectServiceElementFrom_Service' => 'Selecteer een dienst voor %1$s',
	'Portal:ListServices' => 'Lijst met diensten',
	'Portal:TitleDetailsFor_Service' => 'Details van de Dienst',
	'Portal:Button:CreateRequestFromService' => 'Maak een verzoek aan voor deze dienst',
	'Portal:ListOpenRequests' => 'Lijst met open verzoeken',
	'Portal:UserRequest:MoreInfo' => 'Meer informatie',
	'Portal:Details-Service-Element' => 'Dienst elementen',
	'Portal:NoClosedTicket' => 'Geen gesloten verzoeken',
	'Portal:NoService' => '',
	'Portal:ListOpenProblems' => 'Openstaande problemen',
	'Portal:ShowProblem' => 'Problemen',
	'Portal:ShowFaqs' => 'FAQs',
	'Portal:NoOpenProblem' => 'Geen open probleem',
	'Portal:SelectLanguage' => 'Verander je Taal',
	'Portal:LanguageChangedTo_Lang' => 'Taal veranderd naar',
	'Portal:ChooseYourFavoriteLanguage' => 'Kies je favoriete taal',
	'Tickets:Related:OpenIncidents' => 'Open incidents~~',
	'Class:UserRequest/Method:ResolveChildTickets' => 'ResolveChildTickets~~',
	'Class:UserRequest/Method:ResolveChildTickets+' => 'Cascade the resolution to child requests (ev_autoresolve), and align the following characteristics of the request: service, team, agent, resolution info~~',
));

?>
