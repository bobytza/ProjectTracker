import { Injectable, EventEmitter, Output } from '@angular/core';
import { ApiAiClient } from 'api-ai-javascript';
import { OnInit } from '@angular/core/src/metadata/lifecycle_hooks';
import { VoiceListenerService } from './voice-listener.service';

@Injectable()
export class ChattingService {
  readonly client = new ApiAiClient({ accessToken: '63f544d673de4bbcb804ef2aa6adea9c' });

  private waiting_for_more_info: boolean = false;

  @Output() dialogEnded: EventEmitter<String> = new EventEmitter();
  
  constructor(private _voiceListener: VoiceListenerService) { 
    this.activate_listener();
  }

  private activate_listener() {
    this._voiceListener.recognisedCommand.subscribe(a => {
        console.log("part command: " + a);
        this.GetAnswer(a);
    });
  }


  public GetAnswer(request: String) {
    // this.client.textRequest(request).then(response => {
    //   const intentname = response['result']['metadata']['intentName'];
    //   console.log(intentname);
    //   if(intentname !== undefined) {
    //     let missing = response['result']['fulfillment'];
    //     if(missing !== undefined && missing['speech'] !== "") {
    //     } else {
    //       switch(intentname) {
    //         case "lista_clienti":
    //           this._answer.intentName = intentname;
    //           this._answer.params = response['result']['parameters'];
    //           this.dialogEnded.emit(this._answer);
    //           break;
    //         case "lista_proiecte":
    //           this._answer.intentName = intentname;
    //           this._answer.params = response['result']['parameters'];
    //           this.dialogEnded.emit(this._answer);
    //           break;
    //       }
    //     }
    //   }
    // });
    this.dialogEnded.emit(request);
  }
}
