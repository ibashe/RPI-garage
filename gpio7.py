#!/usr/bin/python

import RPi.GPIO as GPIO
import time

GPIO.setwarnings(False)

GPIO.setmode(GPIO.BOARD)
GPIO.setup(7,GPIO.OUT)

GPIO.output(7,False)
time.sleep(2)
GPIO.output(7,True)


