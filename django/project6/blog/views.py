from django.shortcuts import get_object_or_404, render # update

from .models import Post


def post_list(request):
    posts = Post.objects.all()
    return render(request, "home.html", {"posts": posts})


def post_detail(request, pk):       # add
    post = get_object_or_404(Post, pk=pk)
    return render(request, "post_detail.html", {"post": post})
