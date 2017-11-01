# -*- coding: utf-8 -*-
from django.conf.urls import include, url
from django.views.generic import TemplateView

# Uncomment the next two lines to enable the admin:
import xadmin
xadmin.autodiscover()

# version模块自动注册需要版本控制的 Model
from xadmin.plugins import xversion
xversion.register_models()

from django.contrib import admin

from users.views import LoginView

urlpatterns = [
    url(r'xadmin/', include(xadmin.site.urls)),
    url(r'^admin/', include(admin.site.urls)),
    url(r'^$', TemplateView.as_view(template_name="index.html"), name="index"),
    url(r'^login/$', LoginView.as_view(), name="login")
]

