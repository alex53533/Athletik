console.log('script actif');

var btn_creer = document.getElementById('register');

btn_creer.addEventListener('click', create_participant());
//btn_creer.addEventListener('click', function(){this.remove();});

console.log('script actif');

function create_participant(){
    var divform = document.getElementById('regformdiv');
    var formulaire = document.getElementById('register_form');
    var divID = document.createElement('div');
    var divFName = document.createElement('div');
    var divLName = document.createElement('div');
    var divBDate = document.createElement('div');
    var spanID = document.createElement('span');
    var spanFName = document.createElement('span');
    var spanLName = document.createElement('span');
    var spanBDate = document.createElement('span');
    var identifiant = document.createElement('input');
    var fname = document.createElement('input');
    var lname = document.createElement('input');
    var bdate = document.createElement('input');
    var glyphID = document.createElement('i');
    var glyphFName = document.createElement('i');
    var glyphLName = document.createElement('i');
    var glyphBDate = document.createElement('i');
    var btn_submit = document.createElement('button');
    var formH = document.createElement('h3');
    var Htext = document.createTextNode("Renseignez tous les champs pour créer un nouveau 'participant'");
    formH.appendChild(Htext);
    
    formH.className = 'col-xs-12 bg-info';
    identifiant.type = 'text';
    identifiant.className = 'form-control';
    identifiant.placeholder = 'Entrez un id';
    identifiant.name = 'newuserID';
    
    fname.type = 'text';
    fname.id = 'fname';
    fname.name = 'fnamec';
    fname.className = 'form-control';
    fname.placeholder = 'Entrez le prénom du participant';
    
    lname.type = 'text';
    lname.id = 'lname';
    lname.name = 'lnameee';
    lname.className = 'form-control';
    lname.placeholder = 'Entrez le nom du participant';
    
    bdate.type = 'number';
    bdate.className = 'form-control';
    bdate.placeholder = 'Entrez l\'année de naissance du participant';
    bdate.name = 'newuserage';
    
    divID.className = 'input-group';
    divFName.className = 'input-group';
    divLName.className = 'input-group';
    divBDate.className = 'input-group';
    
    spanID.className = 'input-group-addon';
    
    glyphID.className = 'glyphicon glyphicon-info-sign';
    glyphFName.className = 'glyphicon glyphicon-edit';
    glyphLName.className = 'glyphicon glyphicon-ok-circle';
    glyphBDate.className = 'glyphicon glyphicon-tower';
    
    spanID.className = 'input-group-addon';
    spanFName.className = 'input-group-addon';
    spanLName.className = 'input-group-addon';
    spanBDate.className = 'input-group-addon';
    
    btn_submit.type = 'submit';
    btn_submit.className = 'btn btn-success btn-lg';
    btn_submit.textContent = 'Créer participant';
    console.log('OK1');
    
    spanID.appendChild(glyphID);
    divID.appendChild(spanID);
    divID.appendChild(identifiant);
    
    spanFName.appendChild(glyphFName);
    divFName.appendChild(spanFName);
    divFName.appendChild(fname);
    
    spanLName.appendChild(glyphLName);
    divLName.appendChild(spanLName);
    divLName.appendChild(lname);
    
    spanBDate.appendChild(glyphBDate);
    divBDate.appendChild(spanBDate);
    divBDate.appendChild(bdate); 
    
    formulaire.appendChild(divID);
    formulaire.appendChild(divFName);
    formulaire.appendChild(divLName);
    formulaire.appendChild(divBDate);
    formulaire.appendChild(btn_submit);
    divform.insertBefore(formH, formulaire);
    
    btn_submit.addEventListener('click', function(){
        console.log('FUNCTION VALIDATE START');
        console.log('OK2');
    });}


  