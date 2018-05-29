#include <ESP8266HTTPClient.h>
#include <ESP8266WiFi.h>

void setup() {
 
  Serial.begin(115200);                                  
  WiFi.begin("ssid", "password");   
  while (WiFi.status() != WL_CONNECTED) {  
 
    delay(500);
    Serial.println("Waiting for connection");
 
  }
  getBell(url);
 
}
void loop(){
   
  
  }

void getBell(url) {
 
 if(WiFi.status()== WL_CONNECTED){   
 
   
   HTTPClient http;    
 
   http.begin(url);      
   http.addHeader("Content-Type", "text/plain");  
 
   int httpCode = http.POST("Message from ESP8266");   
   String payload = http.getString();                  
 
   Serial.println(httpCode);   
   Serial.println(payload);   
 
   http.end();  
 
 }else{
 
    Serial.println("Error in WiFi connection");   
 
 }
 
}
