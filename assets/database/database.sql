create database BDC;
use BDC;

create table bdc(
    id_bdc INT PRIMARY KEY AUTO_INCREMENT,
    titre VARCHAR(100),
    totale DECIMAL(10,2)
);
create table recettes(
    id_recette INT PRIMARY KEY AUTO_INCREMENT,
    Recette VARCHAR(100),
    Totale_2024 DECIMAL(10,2),
    Totale_2025 DECIMAL(10,2)
);
create table recettes_href(
    id_recettes_href INT PRIMARY KEY AUTO_INCREMENT,
    href VARCHAR(100)
);
create table tableau1(
    Nom VARCHAR(100),
    Annee1 DECIMAL(10,2),
    Annee2 DECIMAL(10,2),
    Annee3 DECIMAL(10,2)
);
create table tableau2(
    Nom VARCHAR(100),
    Annee1 DECIMAL(10,2),
    Annee2 DECIMAL(10,2)
);
create table tableau3(
    Nom VARCHAR(100),
    avant DECIMAL(10,2),
    apres DECIMAL(10,2)
);
create table tableau4(
    Nom VARCHAR(100),
    avant DECIMAL(10,2),
    apres DECIMAL(10,2)
);
create table tableau5(
    Nom VARCHAR(100),
    avant DECIMAL(10,2),
    apres DECIMAL(10,2)
);
create table tableau6(
    Nom VARCHAR(100),
    avant DECIMAL(10,2),
    apres DECIMAL(10,2)
);
create table tableau7(
    Nom VARCHAR(100),
    avant DECIMAL(10,2),
    apres DECIMAL(10,2)
);
create table tableau8(
    Nom VARCHAR(100),
    avant DECIMAL(10,2),
    apres DECIMAL(10,2),
    Ecart DECIMAL(10,2)
);
create table tableau8b(
    Titre VARCHAR(100),
    prix INT
);
create table tableau9(
    Nom VARCHAR(100),
    avant DECIMAL(10,2),
    apres DECIMAL(10,2),
    Ecart VARCHAR(100)
);
create table tableau10(
    Nom VARCHAR(100),
    avant DECIMAL(10,2),
    apres DECIMAL(10,2)
);

-- Table bdc
INSERT INTO bdc (titre, Totale) VALUES 
('Recettes', 12962.7),
('Deficit', 3642.2),
('Depenses', 16304.9);

-- Table recettes
INSERT INTO recettes (Recette, Totale_2024, Totale_2025) VALUES 
('Recettes par source', NULL, NULL),
('Recettes fiscales intérieures', 4636.5, 5628.4),
('Recettes douanières', 3768.0, 4366.0),
('Recettes non fiscales', 345.8, 491.7),
('Don', 1086.3, 2476.6);

-- Table recettes_href
INSERT INTO recettes_href (href) VALUES 
('recettes_par_source'),
('recette_fiscale'),
('recettes_douanieres'),
('recettes_non_fiscales'),
('don');

-- Table 1
INSERT INTO tableau1 (Nom, Annee1, Annee2, Annee3) VALUES 
('PIB nominal (milliards d Ariary)', 78945.4, 88851.6, 99826.3),
('Taux de croissance économique', 4.4, 5.0, 5.0),
('Indice des prix à la consommation', 8.2, 7.1, 7.2),
('Ratio de dépenses publiques (%PIB)', 16.2, 18.4, 17.8),
('Solde global (base caisse)', -4.3, -4.1, -4.1),
('Solde primaire (base caisse)', 214.2, 1097.6, 866.0),
('Taux de change (moyenne période)', NULL, NULL, NULL),
('Dollars/Ariary', 4508.6, 4688.8, 4853.2),
('Euro', 4905.5, 5275.2, 5532.7),
('Taux d investissement (%PIB)', NULL, NULL, NULL),
('Public', 6.1, 9.6, 8.3),
('Privé', 14.6, 12.0, 13.7),
('Taux de pression fiscale (%PIB)', 10.6, 11.2, 11.8);

-- Table 2
INSERT INTO tableau2 (Nom, Annee1, Annee2) VALUES 
('SECTEUR PRIMAIRE', 5.3, 7.8),
('Agriculture', 6.0, 9.5),
('Élevage et pêche', 3.9, 4.0),
('Sylviculture', 1.0, 1.1),
('SECTEUR SECONDAIRE', -3.3, 3.4),
('Industrie extractive', -20.8, 4.0),
('Alimentaire, boisson, tabac', 0.9, 2.4),
('Textile', 31.6, 4.0),
('Bois, papiers, imprimerie', 0.4, 0.7),
('Matériaux de construction', 7.9, 8.0),
('Industrie métallique', 7.2, 7.3),
('Machine, matériels électriques', 3.1, 3.2),
('Industries diverses', 0.5, 0.6),
('Électricité, eau, gaz', 3.9, 4.0),
('SECTEUR TERTIAIRE', 5.0, 5.4),
('PIB', 3.2, 3.6),
('Commerce, entretiens, réparations', 4.2, 4.3),
('Hôtel, restaurant', 14.7, 14.9),
('Transport', 7.0, 7.4),
('Poste et télécommunication', 13.4, 13.7),
('Banque, assurance', 5.3, 6.1),
('Services aux entreprises', 2.3, 2.4),
('Administration', 1.7, 1.9),
('Éducation', 1.7, 1.9),
('Santé', 1.8, 1.9),
('Services rendus aux ménages', 1.3, 1.4);

-- Table 3
INSERT INTO tableau3 (Nom, avant, apres) VALUES 
('Impôt sur les revenus', 1179.0, 1411.4),
('Impôt sur les revenus Salariaux et Assimilés', 848.2, 889.9),
('Impôt sur les revenus des Capitaux Mobiliers', 78.2, 93.7),
('Impôt sur les plus-values Immobilières', 14.0, 18.3),
('Impôt Synthétique', 132.3, 164.7),
('Droit d Enregistrement', 49.0, 62.8),
('Taxe sur la Valeur Ajoutée', 1400.2, 1742.2),
('Impôt sur les marchés Publics', 148.7, 250.0),
('Droit d Accise (y compris Taxe environnementale)', 754.1, 955.4),
('Taxes sur les Assurances', 17.2, 20.6),
('Droit de Timbres', 14.1, 16.8),
('Autres', 1.5, 2.7);

-- Table 4
INSERT INTO tableau4 (Nom, avant, apres) VALUES 
('Droit de douane', 847.5, 1010.7),
('TVA à l importation', 1768.3, 2148.3),
('Taxe sur les produits pétroliers', 308.0, 326.0),
('TVA sur les produits pétroliers', 842.8, 879.0),
('Droit de navigation', 1.2, 1.9),
('Autres', 0.2, 0.1);

-- Table 5
INSERT INTO tableau5 (Nom, avant, apres) VALUES 
('Dividendes', 89.5, 120.2),
('Productions immobilières financières', 0.5, 2.1),
('Redevance de pêche', 10.0, 15.0),
('Redevance minières', 84.9, 331.2),
('Autres redevance', 9.7, 10.0),
('Produits des activités et autres', 11.1, 8.1),
('Autres', 140.1, 5.2);

-- Table 6
INSERT INTO tableau6 (Nom, avant, apres) VALUES
('Courants', 0.3, 31.0),
('Capital', 1086.0, 2445.6);

-- Table 7
INSERT INTO tableau7 (Nom, avant, apres) VALUES
('Intérêts de la dette', 672.0, 756.5),
('Dépenses courantes de solde (hors indemnités)', 3814.5, 3846.4),
('Dépenses courantes hors solde', 3069.0, 2304.3),
('Indemnités', 244.8, 244.8),
('Biens/Services', 573.2, 504.7),
('Transferts et subventions', 2251.0, 1554.8),
('Dépenses d investissement', 4836.8, 8537.2),
('PIP sur financement interne', 1262.5, 2377.3),
('PIP sur financement externe', 3574.3, 6159.9),
('Autres opérations nettes du trésor', 390.2, 860.6);

-- Table 8
INSERT INTO tableau8 (Nom, avant, apres, Ecart) VALUES
('Dépenses de solde', 3814.5, 3846.4, 31.9),
('Indicateurs', NULL, NULL, NULL),
('Solde/PIB Nominal', 4.8, 4.3, -0.5),
('Solde/Recettes fiscales nettes', 47.9, 40.5, -7.4),
('Solde/Dépenses totales', 29.9, 23.6, -6.3);

-- Table 8b
INSERT INTO tableau8b (Titre, prix) VALUES
('Ministère des Forces Armées', 1000),
('Ministère de la Santé Publique', 300),
('Ministère de la Sécurité Publique', 1000),
('Ministère de l’Éducation Nationale', 3000),
('Ministère de l’Enseignement Technique
et de la Formation Professionnelle', 250),
('Ministère de l’Enseignement Supérieur
et de le Recherche Scientifique', 100),
('Ministère délégué en charge de la
Gendarmerie Nationale', 1000);

-- Table 9
INSERT INTO tableau9 (Nom, avant, apres, Ecart) VALUES
('Indemnités', 244.8, 244.8, 0.0),
('Biens et Services', 573.2, 504.7, -68.5),
('Transferts', 2251.0, 1554.8, -696.2);

-- Table 10
INSERT INTO tableau10 (Nom, avant, apres) VALUES
('Présidence de la République', 177.1, 224.7),
('Sénat', 22.1, 21.3),
('Assemblée Nationale', 87.4, 85.9),
('Haute Cour Constitutionnelle', 11.9, 9.3),
('Primature', 278.3, 339.9),
('Conseil du Fampihavanana Malagasy', 6.7, 6.3),
('Commission Électorale Nationale Indépendante', 113.3, 16.4),
('Ministère de la Défense Nationale', 557.0, 543.2),
('Ministère des Affaires Étrangères', 99.2, 104.7),
('Ministère de la Justice', 199.6, 219.8),
('Ministère de l Intérieur', 150.2, 134.7),
('Ministère de l Économie et des Finances', 2848.0, 2332.7),
('Ministère de la Sécurité Publique', 228.3, 229.2),
('Ministère de l Industrialisation et du Commerce', 113.2, 119.6),
('Ministère de la Décentralisation et de l Aménagement du Territoire', 356.8, 568.1),
('Ministère du Travail, de l Emploi et de la Fonction Publique', 31.8, 33.7),
('Ministère du Tourisme et de l Artisanat', 19.2, 43.9),
('Ministère de l Enseignement Supérieur et de la Recherche Scientifique', 284.2, 285.6),
('Ministère de l Environnement et du Développement Durable', 94.4, 188.8),
('Ministère de l Éducation Nationale', 1532.8, 1562.0),
('Ministère des Transports et de la Météorologie', 63.9, 216.3),
('Ministère de la Santé Publique', 716.6, 921.0),
('Ministère de la Communication et de la Culture', 38.4, 32.1),
('Ministère des Travaux Publics', 1217.3, 2327.5),
('Ministère des Mines et des Ressources Stratégiques', 18.3, 18.1),
('Ministère de l Énergie et des Hydrocarbures', 407.9, 1332.0),
('Ministère de l Eau, de l Assainissement et de l Hygiène', 306.1, 600.2),
('Ministère de l Agriculture et de l Élevage', 469.8, 795.5),
('Ministère de la Pêche et de l Économie Bleue', 29.9, 28.8),
('Ministère de l Enseignement Technique et de la Formation Professionnelle', 103.7, 94.8),
('Ministère de l Artisanat et des Métiers', 2.5, NULL),
('Ministère du Développement Numérique, des Postes et des Télécommunications', 8.4, 8.8),
('Ministère de la Population et des Solidarités', 99.1, 193.4),
('Ministère de la Jeunesse et des Sports', 40.5, 58.1),
('Secretariat d État en charge des Nouvelles Villes et de l Habitat', 247.1, 138.8),
('Ministère délégué chargé de la Gendarmerie', 414.8, 446.4),
('Secrétariat d État en charge de la Souveraineté Alimentaire', NULL, 127.3),
('Total Institutions et Ministères', 11395.9, 14408.9),
('Organes Constitutionnels', NULL, NULL),
('Haut Conseil pour la Défense de la Démocratie et de l État de Droit (HCDDED)', 2.1, 2.0),
('Commission Nationale Indépendante des Droits de l Homme (CNIDH)', 2.1, 2.0),
('Total « Organes Constitutionnels »', 4.2, 4.0),
('Haute Cour de Justice', 3.7, 3.5),
('Total Hors « Opérations d ordre »', 11403.8, 14416.4);