<?php
    include( "connecion.php");
    if( isset($_POST["button"])){
            if( isset($_POST["nom"]) && !empty($_POST["nom"])){
                $nom=$_POST["nom"];
            }else{
                $e_nom="Veuillez remplir ce champ";
            }
            if( isset($_POST["prenom"]) && !empty($_POST["prenom"])){
                $prenom=$_POST["prenom"];
            }else{
                $e_prenom="Veuillez remplir ce champ";
            }
            if( isset($_POST["email"]) && !empty($_POST["email"])){
                $email=$_POST["email"];
            }else{
                $e_email="Veuillez remplir ce champ";
            }
            if( isset($_POST["telephone"]) && !empty($_POST["telephone"])){
                $telephone=$_POST["telephone"];
            }else{
                $e_telephone="Veuillez remplir ce champ";
            }
            if( isset($_POST["adresse"]) && !empty($_POST["adresse"])){
                $adresse=$_POST["adresse"];
            }else{
                $e_adresse="Veuillez remplir ce champ";
            }
            if( isset($nom) && isset($prenom) && isset($email) && isset($telephone) && isset($adresse)){
             $nom=htmlspecialchars($nom);
             $prenom=htmlspecialchars($prenom);
             $email=htmlspecialchars($email);
             $telephone=htmlspecialchars($telephone); 
             $adresse=htmlspecialchars($adresse); 
            $sql=$bd->prepare("INSERT INTO don (nom_don,prenom_don,email_don,telephone_don,adresse_don) VALUE(?,?,?,?,?)");
            $res=$sql->execute(array( $nom,$prenom,$email,$telephone,$adresse));}
            if($res){
                $bon=" Insertion reussie";
             }
             }
?>
<!DOCTYPE html>
<html>
    <head>
        <title> PROJET</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="bootstrap.css">
        <link rel="stylesheet" href="pro.css">
    </head>
    <body>
        <div class="navbar navbar-default">
             <div class="navbar-header">
                <a class="navbar-brand" href="#"></a>
             </div>
                <li class="active"><a href="#"> ACCUEIL</a></li>
                <li><a href="#pro"> A PROPOS</a></li>
                <li><a href="#te"> TEMOIGNAGES</a></li>
                <li><a href="#co"> CONTACTS</a></li>
                <li><a href="#je"> JE FAIS UN DON</a></li>
                <form action="" class="navbar-form pull-right">
                <input type="text" style="width:150px" class="input-sm form-control" placeholder="Recherche">
                <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-eye-open">Chercher</span></button>
                </form>   
        </div>
        <div class="image">
            <h2 class="a"> SOURIRES D'ENFANTS: UNIS POUR LE BONHEUR DES PETITS</h2>
        </div>
        <div>
            <h3 id="pro"> A PROPOS</h3>
            <p> Notre projet vise à apporter un sourire aux visages des enfants défavorisés en leur offrant des dons significatifs.
                Nous cherchons à collecter des fournitures scolaires,des jouets éducatifs, des livres et des vetements pour repondre à leurs besoins
                et encourager leur développement. En collaborant avec des écoles locales, des orphelinats et des organisations caritatives,nous nous 
                efforçons de créer un impact positif durable dans la vie de ces enfants. Avec votre soutien,nous pouvons semer des grains d'espoir et de 
                bonheur dans leurs coeurs,leure offrant ainsi un avenir plus radieux. Rejoignez nous dans cette noble cause et devenez le moteur de 
                changement pour un monde où chaque enfant mérite un avenir meilleur.
            </p>
            <div class="imgo">
                <div class="img1"> <img src="e.jpg" alt="photo"></div>
                <div class="img2"> <img src="d.jpg" alt="photo"></div>
            </div>
                <p> Lorsque vous effectuez un don pour soutenir les orphelins, vous sauvez littéralement la vie de ces enfants. 
                Les orphelins que nous aidons, sont issus de communautés pauvres : ils sont menacés par la faim, la malnutrition et les
                 maladies liées à l’eau non potable. Faire part pour soutenir les orphelins est une action noble qui apporte 
                 un soutien essentiel à ces enfants vulnérables.
                 N’attendez plus et sauvez l’avenir d’un enfant en le soutenant dès maintenant.</p>
             </div>
             <img src="g.jpg" alt="photo"> </br>
             <h2 class="add"> POURQUOI AIDER UN ENFANT DANS LE BESOIN ?</h2>
             <p>
                Aider un enfant dans le besoin est important car cela lui donne une chance équitable de grandir,d'apprendre et de s'épanouir.
                En investissant dans leur bien-etre,nous construisons un avenir meilleur pour la société dans son ensemble. 
             </p>
             <p>
             C'est aussi une belle façon de l'amener à prendre confiance en sa capacité d'apprendre. Cela l'aide
              aussi à développer de nouvelles habiletés et à devenir de plus en plus autonome.
             </p>
             <h3 id="te"> TEMOIGNAGES</h3>
             <p>
                Les temoignages des enfants orphelins peuvent etre poignants et révélateurs des défis auxquels ils sont confronté. beaucoup 
                partagent des histoires de pertes, de solitude et de lutte pour trouver un sentiment d'appartenance et de sécurité.Leur voix est 
                essentielle pour sensibiliser aux besoins specifiques des enfants orphelins et pour encourager des actions visant à leur offrir
                un soutien adéquat et des opportunités 
                pour un avenir meilleur.
             </p>
             <h4>
                Voici un exemple de temoignage d'un enfant orphelin :
             </h4>
             <p>
                "Quand j'ai perdu mes parents,j'ai cru que le monde s'effondait autour de moi. Tout était flou et effrayant . Mais grace 
                au soutien de ma famille élargie et des travailleurs sociaux ,j'ai lentement trouvé un nouvel équilibre . Chaque jour est un 
                défi,mais je refuse de laisser la trajédie definir qui je suis. Je veux rendre mes parents fiers en poursuivant mes reves et en faisant
                de mon mieux dans tout ce que je fais. Leur amour continue de m'inspirer,meme s'ils ne sont plus là physiquement.Je suis reconnaissant
                pour chaque petit pas en avant et pour les personnes qui ont tendu la main pour m'aider à traverser les moments sombres." 
             </p>
             <h4>
                Un autre temoignage
             </h4>
             <img src="RDC.png" alt="photo">
             <p>

                Quelque temps après, alors que j’étais à la rue, on m’a appris la mort de mon père.
                Après l’enterrement de mon père, ma mère et mes frères ont été chassés de la maison
                par la famille de mon père. Ma mère n’a pas supporté ce choc et elle est morte aussi.
                Depuis, je n’ai plus des nouvelles de mes frères.

                Pour survivre, j’ai continué à voler à VICTOIRE. Un jour un de mes camarades qui s’appelle 
                Junior m’a demandé d’aller avec lui voir nos copains qui vivaient aussi à la rue dans la commune de Bandal.
                Nous sommes allés avec eux au Centre LIKEMO afin de prendre un bain et avoir un repas. A l’arrivée au Centre,
                j’ai été accueilli par Madame Chantal. Elle a commencé à parler avec moi et elle m’a invité à revenir chaque
                jour au Centre pour être suivi avec les autres enfants au lieu de risquer ma vie dans la rue.

                Un jour, je me suis réveillé avec des douleurs atroces au bas-ventre. Je pleurais beaucoup à cause de la 
                souffrance. Mes amis se moquaient de moi et disaient que j’étais ivre parce qu’à l’époque, je prenais 
                toute sorte de boissons alcoolisées, de la drogue et du chanvre. J’ai attendu que mon ami Junior revienne
                pour qu’il me ramène au Centre.  A l’arrivée, j’ai été consulté par Madame Anita et le docteur de la
                clinique mobile CENACLE. Ils m’ont dit que mon cas était grave. Ils m’ont gardé car il fallait que je
                sois opéré d’urgence. Le jour suivant, j’ai été conduit au centre de santé et j’ai été informé que j’avais une hernie
                    et la seule façon de me sauver était de m’opérer.

                Quelque temps après ma convalescence, j’ai fait le vœu de commencer à faire la formation en mécanique et 
                cela m’a été accordé par le CATSR.

                Grâce au soutien que j’ai reçu, je suis encore en vie et en bonne santé.  Je me suis libéré de la toxicomanie 
                et je mange à ma faim. Je crois qu’à la sortie de ma formation, je serais un grand mécanicien.
             </p>
            <div>
                <h4 id="je"><a href="#"> JE FAIS UN DON</a></h4>
                <form action="formulaire.php" class="col-6 mx-auto" method="POST">
                <p>
                    <?php
                        if(isset($bon)){
                            echo $bon;
                        }
                    ?>
                </p>
                <div class="form-group col-6">  
                        <label for="nom"> Entrez votre nom:</label><br>
                        <input type="text" name="nom" class="form-control" id="nom">
                        <p style="color:red;font-size:14px;">
                            <?php
                                if(isset($e_nom)){
                                    echo $e_nom;
                                }
                    
                            ?>
                        </p>
                    </div>  
                    <div class="form-group col-6">
                        <label for="prenom"> Entrez votre prenom:</label><br>
                        <input type="text"name="prenom" class="form-control" id="prenom">
                        <p style="color:red;font-size:14px;">
                            <?php
                                if(isset($e_prenom)){
                                    echo $e_prenom;
                                }
                    
                            ?>
                        </p>
                    </div>

                <div class="form-group col-6">
                    <label for="email"> Entrez votre e-mail:</label><br>
                    <input type="email" name="email" class="form-control" id="email" placeholder="azim@gmail.com">
                    <p style="color:red;font-size:14px;">
                            <?php
                                if(isset($e_email)){
                                    echo $e_email;
                                }
                    
                            ?>
                        </p>
                </div>
                <div class="form-group col-6">
                    <label for="telephone"> Entrez votre numero de telephone:</label><br>
                    <input type="tel" name="telephone" class="form-control" id="telephone" placeholder="00000000" >
                    <p style="color:red;font-size:14px;">
                            <?php
                                if(isset($e_telephone)){
                                    echo $e_telephone;
                                }
                    
                            ?>
                        </p>
                </div>
                <div class="form-group">
                    <label for="adresse"> Entrez votre adresse:</label><br>
                    <input type="tel" name="adresse" class="form-control" id="adresse" >
                    <p style="color:red;font-size:14px;">
                            <?php
                                if(isset($e_adresse)){
                                    echo $e_adresse;
                                }
                    
                            ?>
                        </p>
                        <p>
                        Votre adresse de messagerie est uniquement utilisée pour vous envoyer notre lettre d'information ainsi que
                         des informations concernant nos activités. Vous pouvez à tout moment utiliser le lien de désabonnement intégré dans chacun de nos mails.
                        </p>
                </div>
                <button type="submit" class="btn btn-danger my-4 pull-right" name="button">SUBMIT</button>

            </form>
        </div>
        <div class="pied">
           <div class="mm">
                <div class="max">
                <p id="co"><a href="#"> Contacts</a></p>
                    <p> Cotonou Bénin</p>
                    <p> Mentions legales</p>
                    <p> Notre service donateurs est à votre disposition pour repondre à toutes vos questions.
                        N'hésitez pas à nous contacter par e-mail
                    </p>
                    <p> <a href="#"> don@gmail.com</a></p>
                    <p> 
                        <a href="#"> 229 00 00 00 00</a>
                    </p>
                </div>
                <div>
                    <h4><a href="#"> Nous soutenir en toute confiance</a></h4>
                    <p> Ce site est à 100% sécurisé. lorsque vous renseignez vos données,vous le faites dans un espace intégralement sécurisé</p>
                </div>
           </div>
        </div>

    </body>
</html>