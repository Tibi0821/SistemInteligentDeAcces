# SistemInteligentDeAcces
This project represents an intelligent access system that utilizes the ESP8266 development board, an 0.96" OLED Display, and a fingerprint sensor to allow users access to a restricted space. <br>

Required Components

To implement this system, you will need the following components: <br>
-ESP8266 development board <br>
-0.96" OLED Display <br>
-Fingerprint sensor compatible with ESP8266 <br>
-Breadboard and connecting wires <br>
-Power supply (USB cable for powering the ESP8266 board) <br>

Setup
-Connect all the components following the specific instructions and required connections. <br>
-Download and install the Arduino IDE (https://www.arduino.cc/en/software). <br>
-Open the Arduino IDE and install the necessary libraries: <br>
   -ESP8266 core for Arduino - Make sure you select the ESP8266 board in Tools > Board. <br>
   -Adafruit GFX Library for graphics control of the LCD. <br>
   -Adafruit SSD1306 Library for communication with the SSD1306-based LCD. <br>
   -Adafruit Fingerprint Sensor Library for the fingerprint sensor. <br>
-Depending on the hardware connections you made, modify the pin definitions in the source code to match your configuration. <br>
-Upload the code to the ESP8266 board using the "Upload" function in the Arduino IDE. <br>
-After successful upload, you should see debug messages on the serial console indicating the system initialization and fingerprint sensor status. <br>
-Test the functionality of the access system. Use the fingerprint sensor to register and authenticate fingerprints. The appropriate messages will be displayed on the LCD. <br>

-Thank you, and we hope you have a pleasant experience with this intelligent access system!
