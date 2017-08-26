#!/usr/bin/python
import RPi.GPIO as GPIO
		
# connect RPi numbered pin
led = 37
		
GPIO.setmode(GPIO.BOARD)
GPIO.setup(led, GPIO.OUT, initial=1)
