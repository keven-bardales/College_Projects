let usuarios=[]


    usuarios = [
      {nombre_usuario: 'keven.bardales',
       correo:'keven.bardales@unitec.edu',
       Contraseña:'12345678',
       nombre: 'Keven Bardales' 
      },
      {nombre_usuario: 'ferFlores',
       correo:'ferflores@unitec.edu',
       Contraseña:'12345',
       nombre: 'Fernando Flores' 
      },
      {nombre_usuario: 'Eandino',
       correo:'EAndino@unitec.edu',
       Contraseña:'321321',
       nombre: 'Eduardo Andino' 
      }
  ]

  let login  = document.getElementById('login')

  login.onclick=function(){
        
     let usuario = document.getElementById('usuario').value
      let password = document.getElementById('password').value
    let yellow = document.getElementById('yellow');
    let red = document.getElementById('red');

    for(let i = 0; i < usuarios.length; i++){
        if(usuario === usuarios[i].nombre_usuario && password === usuarios[i].Contraseña ){
            console.log('usario valido')
            red.classList.add('collapse');
            yellow.classList.add('collapse');
            window.location = '/examen.html'
        }else if(usuario === '' || password === ''){
            yellow.classList.remove('collapse')
            red.classList.add('collapse');
        }else if(usuario != usuarios[i].nombre_usuario && password != usuarios[i].Contraseña ){
            red.classList.remove('collapse');
        yellow.classList.add('collapse');
        }

} 
 }

 