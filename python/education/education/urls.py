# """education URL Configuration

# The `urlpatterns` list routes URLs to views. For more information please see:
    # https://docs.djangoproject.com/en/1.9/topics/http/urls/
# Examples:
# Function views
    # 1. Add an import:  from my_app import views
    # 2. Add a URL to urlpatterns:  url(r'^$', views.home, name='home')
# Class-based views
    # 1. Add an import:  from other_app.views import Home
    # 2. Add a URL to urlpatterns:  url(r'^$', Home.as_view(), name='home')
# Including another URLconf
    # 1. Import the include() function: from django.conf.urls import url, include
    # 2. Add a URL to urlpatterns:  url(r'^blog/', include('blog.urls'))
# """
# from django.conf.urls import include, url
# from django.contrib import admin
# # from apps.message.views import getform

# import xadmin
# xadmin.autodiscover()

# # from xadmin.plugins import xversion
# # xversion.register_models()

# # urlpatterns = patterns('',
    # # url(r'xamin/', include(xadmin.site.urls)),
    # # url(r'^admin/', include(admin.site.urls))
# # )
# urlpatterns = [
    # url(r'^admin/', xadmin.site.urls)
# ]

# -*- coding: utf-8 -*-
from django.conf.urls import include, url

# Uncomment the next two lines to enable the admin:
import xadmin
xadmin.autodiscover()

# version模块自动注册需要版本控制的 Model
from xadmin.plugins import xversion
xversion.register_models()

from django.contrib import admin

urlpatterns = [
    url(r'xadmin/', include(xadmin.site.urls)),
    url(r'^admin/', include(admin.site.urls)),
    url(r'^', include(xadmin.site.urls))
]

