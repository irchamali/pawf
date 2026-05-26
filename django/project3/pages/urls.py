from django.urls import path
from .views import about_page_view, home_page_view

urlpatterns = [
	path("", home_page_view),
	path("about/", about_page_view),
]
