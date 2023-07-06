# SistemInteligentDeAcces
This project represents an intelligent access system that utilizes the ESP8266 development board, an 0.96" OLED Display, and a fingerprint sensor to allow users access to a restricted space. <cd>

Required Components

To implement this system, you will need the following components:
-ESP8266 development board
-0.96" OLED Display
-Fingerprint sensor compatible with ESP8266
-Breadboard and connecting wires
-Power supply (USB cable for powering the ESP8266 board)

Setup
-Connect all the components following the specific instructions and required connections.
-Download and install the Arduino IDE (https://www.arduino.cc/en/software).
-Open the Arduino IDE and install the necessary libraries:
  -ESP8266 core for Arduino - Make sure you select the ESP8266 board in Tools > Board.
  -Adafruit GFX Library for graphics control of the LCD.
  -Adafruit SSD1306 Library for communication with the SSD1306-based LCD.
  -Adafruit Fingerprint Sensor Library for the fingerprint sensor.
-Depending on the hardware connections you made, modify the pin definitions in the source code to match your configuration.
-Upload the code to the ESP8266 board using the "Upload" function in the Arduino IDE.
-After successful upload, you should see debug messages on the serial console indicating the system initialization and fingerprint sensor status.
-Test the functionality of the access system. Use the fingerprint sensor to register and authenticate fingerprints. The appropriate messages will be displayed on the LCD.

-Thank you, and we hope you have a pleasant experience with this intelligent access system!
