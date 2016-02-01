
char inByte = 0;         // incoming serial byte
void setup()
{
  // start serial port at 9600 bps and wait for port to open:
  Serial.begin(9600);
  while (!Serial) {
    ; // wait for serial port to connect. Needed for Leonardo only
  }
   pinMode(13, OUTPUT);   
}

void loop()
{
  // if we get a valid byte, read analog ins:
  if (Serial.available() > 0) {
    // get incoming byte:
    inByte = Serial.read();
    if(inByte == 0x01){
    for(int i=0;i<10;i++){
    digitalWrite(13, LOW);
    delay(500);
    digitalWrite(13, HIGH);
    delay(500);
    }
    inByte=0;
    }else{
    digitalWrite(13, LOW);
    }
        
  }
}


