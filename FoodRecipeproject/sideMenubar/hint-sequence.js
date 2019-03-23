var enjoyhint_instance = new EnjoyHint({});

var enjoyhint_script_steps =[
{
    'next .icon' : 'Click on this and select ingredients.',
  	'nextButton' : {className: "myNext", text: "Sure"},
  	'skipButton' : {className: "mySkip", text: "Skip"}	
},
{
  	'next .fas fa-user-plus' : 'If First Time User Then Please SignUp.',
  	'nextButton' : {className: "myNext", text: "Sure"},
  	'skipButton' : {className: "mySkip", text: "Nope!"},
}

];

enjoyhint_instance.set(enjoyhint_script_steps);
enjoyhint_instance.run();