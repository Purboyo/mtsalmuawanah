import './bootstrap';
import * as PIXI from 'pixi.js';

// Buat aplikasi PixiJS baru
const app = new PIXI.Application({
  width: 800, // lebar canvas
  height: 600, // tinggi canvas
});

// Tambahkan canvas PixiJS ke dalam halaman HTML
document.body.appendChild(app.view);

// Buat objek grafis (misalnya sebuah kotak)
const graphics = new PIXI.Graphics();
graphics.beginFill(0x66CCFF);
graphics.drawRect(100, 100, 200, 200);
graphics.endFill();

// Tambahkan objek grafis ke stage
app.stage.addChild(graphics);

// Fungsi penanganan untuk pointerdown
function onPointerDown(event) {
  console.log('Pointer down detected:', event);
  // Anda bisa menambahkan logika lain di sini, misalnya memindahkan objek
  graphics.x = event.data.global.x - 100; // Memindahkan kotak sesuai dengan posisi mouse
  graphics.y = event.data.global.y - 100;
}

// Mengganti penggunaan deprecated dengan eventsDeprecated
app.renderer.eventsDeprecated.on('pointerdown', onPointerDown);

