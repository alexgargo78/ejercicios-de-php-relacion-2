📘 Ejercicios de PHP – Relación II

<img width="736" height="352" alt="image" src="https://github.com/user-attachments/assets/3951fba5-d3d3-4ffc-8845-0ee5438c76b1" />



Este proyecto contiene dos ejercicios prácticos en PHP, organizados en carpetas dentro de src/.

src/
│── css/
│   └── style.css        → Hoja de estilos general para ambos ejercicios
│
│── img/                 → Imágenes utilizadas en los ejercicios
│   ├── hamburguesa.png
│   ├── pizza.png
│   ├── pasta.png
│   ├── quinoa.png
│   ├── agua.png
│   ├── cerveza.png
│   ├── refresco.png
│   ├── calavera.png
│   ├── mediolimon.jpg
│   ├── perfil.jpg
│   └── ...
│
│── ejercicio01/          → Ejercicio 1: Aplicación de pedidos de comida
│   ├── index.php         → Formulario de pedidos
│   └── resultado.php     → Procesa el pedido y calcula el total
│
│── ejercicio02/          → Ejercicio 2: Juego "Apuesta y gana"
│   ├── index.php         → Introducir la cantidad inicial a apostar
│   ├── resultado.php     → Ejecuta cada jugada (doblar, perder mitad, perder todo)
│   └── resultadofinal.php→ Muestra el resultado final si el jugador se planta
│
└── index.php             → Página principal con enlaces a los ejercicios


🥗 Ejercicio 1 – Aplicación de pedidos de comida
📌 Descripción

<img width="738" height="628" alt="image" src="https://github.com/user-attachments/assets/6aa3ff01-2e66-4f92-97b8-279a48839576" />


El usuario puede seleccionar cantidades de distintos platos y bebidas (hamburguesa, pizza, pasta, quinoa, agua, cerveza, refresco).
El formulario (index.php) envía la información a resultado.php, donde se muestra un resumen del pedido con subtotales y el total a pagar.

⚙️ Funcionamiento

1. El usuario introduce cantidades en el formulario.

   <img width="744" height="634" alt="image" src="https://github.com/user-attachments/assets/cb241e0a-bd6b-4e11-a4a8-37658340fea5" />


2. Se envían los datos vía POST a resultado.php.
  
3. El script:

    Lee las cantidades.

    Calcula subtotales multiplicando cantidad × precio.

    Muestra una tabla con el detalle del pedido y el total.

   <img width="747" height="422" alt="image" src="https://github.com/user-attachments/assets/446ce8e3-7118-4821-811b-b85314579165" />



🎲 Ejercicio 2 – Juego "Apuesta y gana"
📌 Descripción

<img width="761" height="353" alt="image" src="https://github.com/user-attachments/assets/df2d43f6-058e-42c3-9fb8-c3f3401ea744" />


Un pequeño juego de azar en el que el jugador apuesta una cantidad inicial y en cada jugada puede:

<img width="741" height="350" alt="image" src="https://github.com/user-attachments/assets/a63e986e-6f4d-4e33-8ff0-559dcbe50dfd" />


        Perder todo el dinero 💀

        <img width="734" height="425" alt="image" src="https://github.com/user-attachments/assets/7619ddf8-be4f-4573-b21b-908a52f40f0e" />


        Perder la mitad del dinero 🍋

        <img width="736" height="483" alt="image" src="https://github.com/user-attachments/assets/6619d2b8-4ee9-48ba-9532-cb3e6d29cee1" />


        Ganar el doble del dinero 🐱

        <img width="737" height="573" alt="image" src="https://github.com/user-attachments/assets/09b97a33-61f2-4c01-ac80-7547057c0c95" />


Después de cada jugada, si aún le queda dinero, el jugador puede:

        Seguir apostando → vuelve a resultado.php.

        Plantarse → pasa a resultadofinal.php, donde se muestra el dinero final conseguido.

        <img width="740" height="305" alt="image" src="https://github.com/user-attachments/assets/1dfa4035-5de1-4b57-9ea0-2d2a4c9c3f5f" />


⚙️ Funcionamiento

1. En index.php, el jugador introduce la cantidad inicial.

2. En resultado.php, se genera un resultado aleatorio (rand(0,2)):

        0 → Pierde todo.

        1 → Pierde la mitad.

        2 → Gana el doble.

3. Se guarda la cantidad en la sesión.

4. El jugador decide:

        Seguir → se repite el proceso en resultado.php.

        Plantarse → pasa a resultadofinal.php, que muestra el saldo final.

5. En resultadofinal.php, la sesión se destruye y se ofrece la opción de volver a empezar.