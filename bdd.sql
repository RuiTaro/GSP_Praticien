#Type_Praticien
Insert into type_praticien(Typ_Libelle) values("Generaliste cabinet");
Insert into type_praticien(Typ_Libelle) values("Vétérinaire");
Insert into type_praticien(Typ_Libelle) values("Dentiste");
Insert into type_praticien(Typ_Libelle) values("Chirurgien");
Insert into type_praticien(Typ_Libelle) values("Gynécologue");
Insert into type_praticien(Typ_Libelle) values("Généraliste hopital");
Insert into type_praticien(Typ_Libelle) values("Urologue");
Insert into type_praticien(Typ_Libelle) values("Cardiologue");
Insert into type_praticien(Typ_Libelle) values("Nécrologue");
Insert into type_praticien(Typ_Libelle) values("Ophtalmologue");
Insert into type_praticien(Typ_Libelle) values("Psychologue");




#Spécialité
Insert into specialite(Spe_Libelle) values("Chirurgie");
Insert into specialite(Spe_Libelle) values("Cardiologie");
Insert into specialite(Spe_Libelle) values("Dermatologie");
Insert into specialite(Spe_Libelle) values("Gynecologie");
Insert into specialite(Spe_Libelle) values("Radiologie");
Insert into specialite(Spe_Libelle) values("Urologie");
Insert into specialite(Spe_Libelle) values("Zoologie");
Insert into specialite(Spe_Libelle) values("Nécrologie");
Insert into specialite(Spe_Libelle) values("Ophtalmologie");
Insert into specialite(Spe_Libelle) values("Psychologie");




#Praticien

#Insert into praticien(Typ_Code, Pra_Nom, Pra_Adresse, Pra_CP, Pra_Ville, Coefnotoriete) values((Select Typ_Code from type_praticien where Typ_Libelle = ""), "", "", , "", );

Insert into praticien(Typ_Code, Pra_Nom, Pra_Adresse, Pra_CP, Pra_Ville, Coefnotoriete) 
	values((Select Typ_Code from type_praticien where Typ_Libelle = "Cardiologue"), "Gongora", "281 Rue Jacques Tati", 78370, "Plaisir", 9);
	
Insert into praticien(Typ_Code, Pra_Nom, Pra_Adresse, Pra_CP, Pra_Ville, Coefnotoriete) 
	values((Select Typ_Code from type_praticien where Typ_Libelle = "Chirurgien"), "Guibert", "32 Rue du Dérapage", 12345, "Los Santos", 8);
	
Insert into praticien(Typ_Code, Pra_Nom, Pra_Adresse, Pra_CP, Pra_Ville, Coefnotoriete) 
	values((Select Typ_Code from type_praticien where Typ_Libelle = "Vétérinaire"), "Froelich", "1 Zoo de Thoiry", 78770, "Thoiry", 8);
	
Insert into praticien(Typ_Code, Pra_Nom, Pra_Adresse, Pra_CP, Pra_Ville, Coefnotoriete) 
	values((Select Typ_Code from type_praticien where Typ_Libelle = "Urologue"), "Rolland Jr.", "74 Rue des Vessies", 78550, "Pissoux", 9);
	
Insert into praticien(Typ_Code, Pra_Nom, Pra_Adresse, Pra_CP, Pra_Ville, Coefnotoriete) 
	values((Select Typ_Code from type_praticien where Typ_Libelle = "Généraliste cabinet"), "Rolland Sr.", "1 Avenue des Processeurs", 01010, "Motherboard", 10);
	
Insert into praticien(Typ_Code, Pra_Nom, Pra_Adresse, Pra_CP, Pra_Ville, Coefnotoriete) 
	values((Select Typ_Code from type_praticien where Typ_Libelle = "Chirurgien"), "Borges", "69 Rue Janus", 46800, "Montcuq", 7);
	
Insert into praticien(Typ_Code, Pra_Nom, Pra_Adresse, Pra_CP, Pra_Ville, Coefnotoriete) 
	values((Select Typ_Code from type_praticien where Typ_Libelle = "Ophtalmologue"), "Ait Abbas", "3 Avenue de Billet", 11046, "Montréal", 10);
	
Insert into praticien(Typ_Code, Pra_Nom, Pra_Adresse, Pra_CP, Pra_Ville, Coefnotoriete) 
	values((Select Typ_Code from type_praticien where Typ_Libelle = "Gynécologue"), "Leguedois", "69 Rue des Mineurs", 59245, "Charbonland", 5);
	
Insert into praticien(Typ_Code, Pra_Nom, Pra_Adresse, Pra_CP, Pra_Ville, Coefnotoriete) 
	values((Select Typ_Code from type_praticien where Typ_Libelle = "Nécrologue"), "Radjagobal", "1 Rue de la Vie", 66666, "Enfer", 9);
	
#Insert into praticien(Typ_Code, Pra_Nom, Pra_Adresse, Pra_CP, Pra_Ville, Coefnotoriete) 
	#values((Select Typ_Code from type_praticien where Typ_Libelle = ""), "", "", , "", );
	
#Insert into praticien(Typ_Code, Pra_Nom, Pra_Adresse, Pra_CP, Pra_Ville, Coefnotoriete) 
	#values((Select Typ_Code from type_praticien where Typ_Libelle = ""), "", "", , "", );
	


#Posseder (diplome)

#Insert into posseder values((Select Pra_Num from praticien where Pra_Nom = ""),(Select Spe_Code from specialite where Spe_Libelle = ""), "", );

Insert into posseder values((Select Pra_Num from praticien where Pra_Nom = "Gongora"),(Select Spe_Code from specialite where Spe_Libelle = "Cardiologie"), "Diplôme de la Cardiologie des coeurs", 20);
