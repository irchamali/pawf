#!/usr/bin/env python
"""Django's command-line utility for administrative tasks."""

import os
import sys
from pathlib import Path


def enforce_local_venv() -> None:
    project_dir = Path(__file__).resolve().parent
    expected_prefix = (project_dir / ".venv").resolve()
    active_prefix = Path(sys.prefix).resolve()

    if active_prefix != expected_prefix:
        sys.stderr.write(
            "Error: This project must run with its local virtual environment.\n"
            f"Use: {expected_prefix / 'bin' / 'python'} manage.py <command>\n"
        )
        raise SystemExit(1)


def main():
    """Run administrative tasks."""
    enforce_local_venv()
    os.environ.setdefault("DJANGO_SETTINGS_MODULE", "django_project.settings")
    try:
        from django.core.management import execute_from_command_line
    except ImportError as exc:
        raise ImportError(
            "Couldn't import Django. Are you sure it's installed and "
            "available on your PYTHONPATH environment variable? Did you "
            "forget to activate a virtual environment?"
        ) from exc
    execute_from_command_line(sys.argv)


if __name__ == "__main__":
    main()
