from django.urls import path

from .views import post_detail, post_list # update

urlpatterns = [
    path("post/<int:pk>/", post_detail, name="post_detail"), # add
    path("", post_list, name="home"),
]
