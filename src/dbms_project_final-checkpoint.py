#!/usr/bin/env python
# coding: utf-8

# In[100]:


import pandas as pd
import numpy as np
import sklearn
from sklearn import linear_model
from sklearn.utils import shuffle
import matplotlib.pyplot as pyplot 
import pickle
from matplotlib import style


# In[91]:


data=pd.read_csv("C:/xampp/htdocs/website_j_comp/data.csv",sep=';')


# In[92]:


data=data[["G1","G2","G3","studytime","failures","absences"]]


# In[93]:


#print(data)


# In[94]:


predict="G3"
X=np.array(data.drop([predict],1))
Y=np.array(data[predict])
x_train,x_test,y_train,y_test = sklearn.model_selection.train_test_split(X,Y,test_size=0.1)


# In[95]:


linear=linear_model.LinearRegression()
linear.fit(x_train,y_train)
acc=linear.score(x_test,y_test)
#print(acc)


# In[96]:


#print("Coefficient: \n", linear.coef_)
#print("Intercept: \n", linear.intercept_)


# In[97]:


f = open("C:/xampp/htdocs/website_j_comp/HTML/file.txt", "r") 
content = f.read()
#print(content)


# In[98]:


x = content.split(" ")


# In[99]:


ad =[]
for i in x:
    ad.append(int(i))
ad = [ad]
pred = linear.predict(ad)
if pred>50:
    pred=50
if pred<0:
    pred=0
print('%.2f' %pred)
        


# In[ ]:




