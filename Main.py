from tkinter.ttk import *
import tkinter as tk
from tkinter import ttk
from tkinter import messagebox
from tkinter import filedialog

import serial.tools.list_ports as port_list
import serial
import time
import threading
import requests
import re
master = tk.Tk()
master.title("BCI Stressed Detect")
master.geometry("900x350")
#master.resizable(False, False)
master.configure(background='white')


serialPort = serial.Serial(port="COM3", baudrate=9600, bytesize=8, timeout=2, stopbits=serial.STOPBITS_ONE)
serialString = ""  # Used to hold data coming over UART
    
def serialcomunication():
        global gpickval
        #serialPort = serial.Serial(
        #port="COM4", baudrate=9600, bytesize=8, timeout=2, stopbits=serial.STOPBITS_ONE)
        serialString = ""  # Used to hold data coming over UART
        while 1:
            # Wait until there is data waiting in the serial buffer
            if serialPort.in_waiting > 0:

                # Read data out of the buffer until a carraige return / new line is found
                serialString = serialPort.readline()

                # Print the contents of the serial data
                try:
                    s1=0;
                    print(serialString.decode("Ascii"))
                    strval=serialString.decode("Ascii");
                    #strval = "".join(re.findall("[a-zA-Z]+", strval))
                    strval = "".join(re.findall("[0-9]+", strval))
                    if strval :
                            print(strval)
                            cvalue=int(strval)
                            strval=""
                            if cvalue<=750:
                                strval="Stressed"
                            else:
                                strval="No_Stressed"
                                

                            aa1.set(strval)

                            if str(cc1.get()):
                                x = requests.get('http://localhost/BCI/Sensors.php?A='+str(cc1.get())+'&B='+str(strval))
                                print(x.text)

                except:
                    pass


timer = threading.Timer(5.0, serialcomunication)
timer.start()
       

label = tk.Label(master ,width=40,text = "Intelligent Quality Checking",font=("arial italic", 30), bg="Black", fg="white").grid(row=0, column=0)

a = tk.Label(master ,width=25,text = "Check For",font=("arial italic", 25), bg="white", fg="Black").grid(row=2, column=0,padx=5, pady=5)
aa1 = tk.StringVar()
cc1 = tk.StringVar()
c1 = ttk.Combobox(master,width=27,textvariable=cc1,font=("arial italic", 15))    
c1.grid(row = 3,column = 0,pady=(10, 10))
c1.current()

al = tk.Label(master ,width=25,text = "Detected",font=("arial italic", 25), bg="white", fg="Black").grid(row=4, column=0,padx=5, pady=5)

a1 = tk.Entry(master,font=("arial italic", 15), bg="white", fg="Blue",width=25,textvariable=aa1).grid(row=5, column=0,padx=5, pady=5)
aa1.set("");

btn1 = tk.Button(master,text="Close",font=("arial italic", 15), bg="Black", fg="white",width=25,command=master.destroy).grid(row=6, column=0,padx=5, pady=20)

master.mainloop()
