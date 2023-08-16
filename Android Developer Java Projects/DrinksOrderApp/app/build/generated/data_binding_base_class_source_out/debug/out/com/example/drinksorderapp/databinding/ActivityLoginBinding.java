// Generated by view binder compiler. Do not edit!
package com.example.drinksorderapp.databinding;

import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.EditText;
import android.widget.RelativeLayout;
import android.widget.TextView;
import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.viewbinding.ViewBinding;
import androidx.viewbinding.ViewBindings;
import com.example.drinksorderapp.R;
import java.lang.NullPointerException;
import java.lang.Override;
import java.lang.String;

public final class ActivityLoginBinding implements ViewBinding {
  @NonNull
  private final RelativeLayout rootView;

  @NonNull
  public final Button btnSignIn;

  @NonNull
  public final Button btnSignUp;

  @NonNull
  public final EditText passwordLogin;

  @NonNull
  public final TextView textView;

  @NonNull
  public final TextView textView2;

  @NonNull
  public final EditText usernameLogin;

  private ActivityLoginBinding(@NonNull RelativeLayout rootView, @NonNull Button btnSignIn,
      @NonNull Button btnSignUp, @NonNull EditText passwordLogin, @NonNull TextView textView,
      @NonNull TextView textView2, @NonNull EditText usernameLogin) {
    this.rootView = rootView;
    this.btnSignIn = btnSignIn;
    this.btnSignUp = btnSignUp;
    this.passwordLogin = passwordLogin;
    this.textView = textView;
    this.textView2 = textView2;
    this.usernameLogin = usernameLogin;
  }

  @Override
  @NonNull
  public RelativeLayout getRoot() {
    return rootView;
  }

  @NonNull
  public static ActivityLoginBinding inflate(@NonNull LayoutInflater inflater) {
    return inflate(inflater, null, false);
  }

  @NonNull
  public static ActivityLoginBinding inflate(@NonNull LayoutInflater inflater,
      @Nullable ViewGroup parent, boolean attachToParent) {
    View root = inflater.inflate(R.layout.activity_login, parent, false);
    if (attachToParent) {
      parent.addView(root);
    }
    return bind(root);
  }

  @NonNull
  public static ActivityLoginBinding bind(@NonNull View rootView) {
    // The body of this method is generated in a way you would not otherwise write.
    // This is done to optimize the compiled bytecode for size and performance.
    int id;
    missingId: {
      id = R.id.btnSignIn;
      Button btnSignIn = ViewBindings.findChildViewById(rootView, id);
      if (btnSignIn == null) {
        break missingId;
      }

      id = R.id.btnSignUp;
      Button btnSignUp = ViewBindings.findChildViewById(rootView, id);
      if (btnSignUp == null) {
        break missingId;
      }

      id = R.id.passwordLogin;
      EditText passwordLogin = ViewBindings.findChildViewById(rootView, id);
      if (passwordLogin == null) {
        break missingId;
      }

      id = R.id.textView;
      TextView textView = ViewBindings.findChildViewById(rootView, id);
      if (textView == null) {
        break missingId;
      }

      id = R.id.textView2;
      TextView textView2 = ViewBindings.findChildViewById(rootView, id);
      if (textView2 == null) {
        break missingId;
      }

      id = R.id.usernameLogin;
      EditText usernameLogin = ViewBindings.findChildViewById(rootView, id);
      if (usernameLogin == null) {
        break missingId;
      }

      return new ActivityLoginBinding((RelativeLayout) rootView, btnSignIn, btnSignUp,
          passwordLogin, textView, textView2, usernameLogin);
    }
    String missingId = rootView.getResources().getResourceName(id);
    throw new NullPointerException("Missing required view with ID: ".concat(missingId));
  }
}
