<?php
$title = "Exercice 1 </br>";
$enonce = "Créer une fonction qui s'appelle capital(). Elle prendra un argument de
type string. Elle devra retourner le nom de la capitale des pays suivants :";

function capital(){
        $zone = array('France'=>'Paris',
        'Allemagne' => 'Berlin',
        'Italie' => 'Rome',
        'Maroc' => 'Rabat',
        'Espagne' => 'Madrid',
        'Portugal' => 'Lisbonne',
        'Angleterre' => 'Londres',
        );
        $zonegeo = 'Italie';
        switch($zonegeo){
            case 'France':
                return $zone['France'];
                break;
               
            case 'Allemagne':
                return $zone['Allemagne'];
                break;
                
            case 'Italie':
                return $zone['Italie'];
                break;
               
            case 'Maroc':
                return $zone['Maroc'];
                break;
    
            case 'Espagne':
                return $zone['Espagne'];
                break;
    
            case 'Portugal' :
                return $zone['Portugal'];
                break;
    
            case 'Angleterre':
                return $zone['Angleterre'];
                break;
    
            default:
              return ('inconnu');
              break;  
    }
}

function affichemsg(){
        $message = '
                $zone = array(\'France\'=>\'Paris\',<br/>
                \'Allemagne\' => \'Berlin\',<br/>
                \'Italie\' => \'Rome\',<br/>
                \'Maroc\' => \'Rabat\',<br/>
                \'Espagne\' => \'Madrid\',<br/>
                \'Portugal\' => \'Lisbonne\',<br/>
                \'Angleterre\' => \'Londres\',<br/>
                );<br/>
                $zonegeo = \'Italie\';<br/>
                switch($zonegeo){<br/>
                    case \'France\':<br/>
                        return $zone[\'France\'];
                        break;<br/>
                    case \'Allemagne\':<br/>
                        return $zone[\'Allemagne\'];
                        break;<br/>
                    case \'Italie\':<br/>
                        return $zone[\'Italie\'];
                        break;<br/>   
                    case \'Maroc\':<br/>
                        return $zone[\'Maroc\'];
                        break;<br/>  
                    case \'Espagne\':<br/>
                        return $zone[\'Espagne\'];
                        break;<br/>
                    case \'Portugal\' :<br/>
                        return $zone[\'Portugal\'];
                        break;<br/>
            
                    case \'Angleterre\':<br/>
                        return $zone[\'Angleterre\'];
                        break;<br/>
                    default:
                      return (\'inconnu\');<br/>
                      break;
                    
        }';
        return $message;
}



function titre($title, $enonce){
    ?>  
<div class="enonce">
                <h1 class="title"><?= $title ?></h1>
                <p><?= $enonce ?></p>
        
        <div class="flexbox">
                <div class="box animate__animated animate__backInUp">
                        <pre class="pretype-2">
                                <code>
                                        <?= affichemsg()?>
                                </code>
                        </pre>
                </div>
                <div class="box animate__animated animate__backInUp lh"><?= capital()?></div>
        </div>
        <a href="Cours/cours1.php">Je suis la</a>
</div>
        <?php
       
}
titre($title, $enonce);

