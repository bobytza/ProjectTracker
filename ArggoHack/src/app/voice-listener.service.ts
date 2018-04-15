import { Injectable, EventEmitter, Output } from '@angular/core';

declare var window: any;
@Injectable()
export class VoiceListenerService {
  recognition = new window.webkitSpeechRecognition();
  @Output() recognisedCommand:EventEmitter<String> = new EventEmitter();

  constructor() { 
    this.recognition.lang = "ro-RO";
    this.recognition.interminResults = false;
    this.recognition.start();
    
    this.recognition.addEventListener('result', (e) => {
      let last = e.results.length - 1;
      let text = e.results[last][0].transcript;
      
      
      console.log(text + " -> " + text.indexOf("activează"));
      if (text.indexOf("adaugă") != -1 || text.indexOf("adauga"))
        this.recognisedCommand.emit("adauga");

      if (text.indexOf("activități") != -1 || text.indexOf("activitati") != -1)
        this.recognisedCommand.emit("activitati");

      else if (text.indexOf("proiecte") != -1) {
        this.recognisedCommand.emit("proiecte");
      }
    });

    this.recognition.addEventListener('start', (e) => {
      console.log("start");
    });

    this.recognition.addEventListener('end', (e) => {
      console.log("ended");
      this.recognition.start();
    });

    this.recognition.addEventListener('error', (e) => {
      console.log(e);
    })
  }
}
