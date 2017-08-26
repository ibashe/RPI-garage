#!/usr/bin/python
import RPi.GPIO as GPIO
		
# connect pins
led = 37


GPIO.setwarnings(False)
		
# pins setup
GPIO.setmode(GPIO.BOARD)
GPIO.setup(led, GPIO.OUT)
		
GPIO.output(led, 0)
GPIO.cleanup()
