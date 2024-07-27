from flask import Blueprint, render_template, flash, redirect, url_for
from flask_login import current_user, login_user, logout_user, login_required
from werkzeug.urls import url_parse
from src import bcrypt
from src.accounts.forms import RegistrationForm, LoginForm
from src.accounts.models import User

accounts_bp = Blueprint('accounts', __name__)