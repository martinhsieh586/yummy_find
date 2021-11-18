# -*- coding: utf-8 -*-
"""
Created on Thu Nov 18 11:48:39 2021

@author: marti
"""

from django.urls import path
from . import views
 
urlpatterns = [
    path('callback', views.callback),
]