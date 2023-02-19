const app = require('express')();
const http = require('http').createServer(app);
const io = require('socket.io')(http, {
  cors: {
    origins: ['https://carnaval.gamo.gob.bo']
  }
});
const fs = require("fs");

app.get('/', (req, res) => {
  res.send('<h1>Hey Socket.io</h1>');
});

let usuarios_conectados = 0;
let visitas;

try {
  visitas = 1 | Number(fs.readFileSync("visitas.txt", "utf8"));
} catch (err) {
  visitas = 1;
  console.error(err);
}

io.on('connection', (socket) => {
  
  console.log("Nuevo usuario conectado " + socket.id);
    usuarios_conectados++;
    visitas++;
    escribirVisitas();
    io.emit("actualizar", usuarios_conectados, visitas);
    socket.on("disconnect", function () {
      console.log("Usuario desconectado " + socket.id);
      usuarios_conectados--;
      io.emit("actualizar", usuarios_conectados, visitas);
    });

    socket.on('my message', (msg) => {
      console.log('message: ' + msg);
      io.emit('my broadcast', `server: ${msg}`);
    });
  });

  function escribirVisitas() {
    try {
      fs.writeFileSync("visitas.txt", visitas + "");
    } catch (err) {
      console.error(err);
    }
  }
  

http.listen(3000, () => {
  console.log('listening on *:3000');
});