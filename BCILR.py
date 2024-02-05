#!C:/Users/VAISHNAVI/AppData/Local/Programs/Python/Python310/python.exe
print ("Content-type:text/html\r\n\r\n")
import cgi, cgitb 

import numpy as np
import pandas as pd
from sklearn.linear_model import LinearRegression
from sklearn.model_selection import train_test_split


form = cgi.FieldStorage() 

# Get data from fields
TR = form.getvalue('testresult')
if TR==None:
    TR="";

if not TR:
    print("Test Result Not Available.!")
else:
    xtr = TR.split('_')
    del xtr[-1]
    #print(len(xtr))
    data = pd.read_csv('BCIdataset.csv')
    x = data[['Do you have irregular Periods',
    'After how many days you get periods',
    'Do you feel any severe pain in lower abdominal or  pelvic area',
    'Feeling mood swings oftenely',
    'Are you currently following any particular diet plans',
    'Are you Suffering from Thyroid',
    'Do You like to eat junk food more',
    'What age range do u belongs to',
    'Do you get healthy sleep',
    'Do you have family history of any following options',
    'Do u have any kind of anxiety and Depression or Do you often feel stressed',
    'Having excessive growth of hair on face ,back and chest area all of sudden',
    'Are u suffering from sudden hair loss or acne breakout']]

    y = data['Result']

    X_train, X_test, y_train, y_test = train_test_split(x, y, test_size=0.2, random_state=0)

    #Train Data regressor Model+++++++++++++++++++++++++++
    regressor = LinearRegression()
    regressor.fit(X_train, y_train)

    #Test Data Model+++++++++++++++++++++++++++
    ytest_pred = regressor.predict(X_test)

    #Set New predict value+++++++++++++++++++++++++++
    newpredicttest = np.array(xtr).reshape(1, 13)
    Ynewtest_pred = regressor.predict(newpredicttest)

    pcropval=round(Ynewtest_pred[0])
    #print(pcropval)
    if pcropval==1:
        print('<hr><div class="alert alert-info clearfix"><div class="messages"><span class="">Yes you have chances of PCOD/PCOS Problem <a href="Main.php?page=11">[ GET Report ]</a></span><br></div></div>')
    else:
        print('<hr><div class="alert alert-info clearfix"><div class="messages"><span class="">No you dont have chances of PCOD/PCOS Problem</span><br></div></div>')
