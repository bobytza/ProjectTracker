import { TestBed, inject } from '@angular/core/testing';

import { VoiceListenerService } from './voice-listener.service';

describe('VoiceListenerService', () => {
  beforeEach(() => {
    TestBed.configureTestingModule({
      providers: [VoiceListenerService]
    });
  });

  it('should be created', inject([VoiceListenerService], (service: VoiceListenerService) => {
    expect(service).toBeTruthy();
  }));
});
