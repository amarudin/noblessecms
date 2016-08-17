PerturbForWrongInertia can't be done for wrong interia or singular.
    PerturbForWrongInertia can't be done for inertia heuristic.
    PerturbForSingularity can't be done for assume singular.
       Perturbation parameters: delta_x=%e delta_s=%e
                         delta_c=%e delta_d=%e
  Number of trial factorizations performed: %d
       -> Redo with modified matrix.
  In inertia heuristic: xWx = %e xx = %e
 a   Quality could not be improved
  q       Asking augmented system solver to improve quality of its solutions.
    Number of negative eigenvalues too small!
  PerturbForSingularity can't be done
        Solving system with delta_x=%e delta_s=%e
                    delta_c=%e delta_d=%e
    SolveOnce returns false during iterative refinement.    solve_retval    Pretend that the current system (including modifications) is singular.
 Just accept current solution.
  S   Iterative refinement failed with residual_ratio = %e
   residual_ratio = %e
    
�z��I�������perturb_always_cd   Active permanent perturbation of constraint linearization.  perturbation only used when required    always use perturbation This options makes the delta_c and delta_d perturbation be used for the computation of every search direction.  Usually, it is only used when the iteration matrix is singular. jacobian_regularization_exponent        Exponent for mu in the regularization for rank-deficient constraint Jacobians.  (This is kappa_c in the implementation paper.)  jacobian_regularization_value   Size of the regularization for rank-deficient constraint Jacobians. (This is bar delta_c in the implementation paper.)  first_hessian_perturbation  Size of first x-s perturbation tried.       The first value tried for the x-s perturbation in the inertia correction scheme.(This is delta_0 in the implementation paper.)  UUUUUU�?perturb_dec_fact    Decrease factor for x-s perturbation.       The factor by which the perturbation is decreased when a trial value is deduced from the size of the most recent successful perturbation. (This is kappa_w^- in the implementation paper.)             @perturb_inc_fact    Increase factor for x-s perturbation.       The factor by which the perturbation is increased when a trial value was not sufficient - this value is used for the computation of all perturbations except for the first. (This is kappa_w^+ in the implementation paper.)    perturb_inc_fact_first  Increase factor for x-s perturbation for very first perturbation.       The factor by which the perturbation is increased when a trial value was not sufficient - this value is used for the computation of the very first perturbation and allows a different value for for the first perturbation than that used for the remaining perturbations. (This is bar_kappa_w^+ in the implementation paper.)        #B����;min_hessian_perturbation    Smallest perturbation of the Hessian block. The size of the perturbation of the Hessian block is never selected smaller than this value, unless no perturbation is necessary. (This is delta_w^min in implementation paper.)    max_hessian_perturbation    Maximum value of regularization parameter for handling negative curvature.      In order to guarantee that the search directions are indeed proper descent directions, Ipopt requires that the inertia of the (augmented) linear system for the step computation has the correct number of negative and positive eigenvalues. The idea is that this guides the algorithm away from maximizers and makes Ipopt more likely converge to first order optimal points that are minimizers. If the inertia is not correct, a multiple of the identity matrix is added to the Hessian of the Lagrangian in the augmented system. This parameter gives the maximum value of the regularization parameter. If a regularization of that size is not enough, the algorithm skips this iteration and goes to the restoration phase. (This is delta_w^max in the implementation paper.)  dx  delta_x perturbation is becoming too large: %e
 Nhj     Dj  Nh  Dh  Nj  L   Dhj     l   Degeneracy test for hess_degenerate_ = %d and jac_degenerate_ = %d
       test_status_ = %d
    Can't get_deltas_for_wrong_inertia for delta_x_curr_ = %e and delta_c_curr_ = %e
   T
���
��
�
�����fast_step_computation   Indicates if the linear system should be solved quickly.    Verify solution of linear system by computing residuals.    Trust that linear systems are solved well.  If set to yes, the algorithm assumes that the linear system that is solved to obtain the search direction, is solved sufficiently well. In that case, no residuals are computed, and the computation of the search direction is a little faster.        ��ؗ�Ҝ<�
N�s���������I�~��:�����iiiWji  pred = %23.16e is negative.  Setting to zero.
      theta2 = %23.16e
    Failed...
      Success...
    Checking Armijo Condition with pred = %23.16e and ared = %23.16e
 rho Value in penalty parameter update formula.  nu_inc  Increment of the penalty parameter. nu_init Initial value of the penalty parameter. S:\rc_i18n_a18p3_201506\Coding\3rdparty\IpOpt\Ipopt\src\Algorithm\IpPenaltyLSAcceptor.cpp       Option "max_soc": This option is non-negative, but no linear solver for computing the SOC given to PenaltyLSAcceptor object.    Watchdog not implemented for penalty function line search.  Set watchdog_shortened_iter_trigger to 0.    nu=%8.2e         Checking Armijo Condition (for resto) with pred = %23.16e and ared = %23.16e
 resto_pred_ not set for check from restoration phase.   resto_pred_ >= 0.     using nu = %23.16e
     dWd = %23.16e
    L�����sigma_max     The average complementariy at the current point is %23.16e
     The average complementariy at the affine step is %23.16e
   The affine maximal step sizes are
   alpha_primal_aff = %23.16e
   alpha_dual_aff = %23.16e
  The linear system could not be solved for the affine step!
 ���A�    sigma = %8.2e d_inf = %18.12e p_inf = %18.12e cmpl = %18.12e q = %18.12e a_pri = %8.2e a_dual = %8.2e xi = %8.2e
   quality_function_section_qf_tol     Tolerance for the golden section search procedure determining the optimal centering parameter (in the function value space).    quality_function_section_sigma_tol      Tolerance for the section search procedure determining the optimal centering parameter (in sigma space).    quality_function_max_section_steps  Maximum number of search steps during direct search procedure determining the optimal centering parameter.      The golden section search is performed for the quality function based mu oracle. (Only used if option "mu_oracle" is set to "quality-function".)        The balancing term included in the quality function for centrality. no balancing term is added  cubic   Max(0,Max(dual_inf,primal_inf)-compl)^3 This determines whether a term is added to the quality function that penalizes situations where the complementarity is much smaller than dual and primal infeasibilities. (Only used if option "mu_oracle" is set to "quality-function".)       The penalty term for centrality that is included in quality function.   no penalty term is added    log complementarity * the log of the centrality measure reciprocal  complementarity * the reciprocal of the centrality measure  cubed-reciprocal    complementarity * the reciprocal of the centrality measure cubed        This determines whether a term is added to the quality function to penalize deviation from centrality with respect to complementarity.  The complementarity measure here is the xi in the Loqo update rule. (Only used if option "mu_oracle" is set to "quality-function".) Norm used for components of the quality function.   (Only used if option "mu_oracle" is set to "quality-function".) sigma_min   Minimum value of the centering parameter.   This is the lower bound for the centering parameter chosen by the quality function based barrier parameter update. (Only used if option "mu_oracle" is set to "quality-function".)  Maximum value of the centering parameter.   This is the upper bound for the centering parameter chosen by the quality function based barrier parameter update. (Only used if option "mu_oracle" is set to "quality-function".)  qf_tol   qf=%d  Sigma = %e
       Y�The linear system could not be solved for the centering step!
  Solving the Primal Dual System for the centering step
  �AB�D�E����
��
L���LOCALLY_INFEASIBLE  RESTORATION_CONVERGED_TO_FEASIBLE_POINT max_resto_iter  Maximum number of successive iterations in restoration phase.   The algorithm terminates with an error message if the number of iterations successively taken in the restoration phase exceeds this number.     �������?required_infeasibility_reduction        Required reduction of infeasibility before leaving restoration phase.   The restoration phase algorithm is performed, until a point is found that is acceptable to the filter and the infeasibility has been reduced by at least the fraction given by this option. Restoration phase converged to a point of local infeasibility       Restoration phase converged to a feasible point that is unacceptable to the filter for the original problem.    S:\rc_i18n_a18p3_201506\Coding\3rdparty\IpOpt\Ipopt\src\Algorithm\IpRestoConvCheck.cpp  Restoration phase converged to a feasible point that is
unacceptable to the filter for the original problem.
   !   Tightening restoration phase tolerance to %e.
  Checking convergence for restoration phase problem...
  orig_trial_barr = %8.2e
    Point does not provide sufficient reduction w.r.t the original constraint violation (orig_inf_pr_max=%e).
      Restoration phase found points satisfying feasibility tolerance in square problem.
     This is the first iteration - continue to take at least one step.
  orig_curr_inf_pr = %8.2e, orig_trial_inf_pr = %8.2e
    orig_curr_theta = %8.2e, orig_trial_theta = %8.2e
  More than %d successive iterations taken in restoration phase.
 ��Ph��E���PQ    Restoration found a point that provides sufficient reduction in theta and is acceptable to the current filter.
 Point is not acceptable to the original current point.
 Point is not acceptable to the original filter.
        @AVze�g3AX�fwY�f�Z*]�[^�^`V�ST T:TTTnT�T�T�TyVca�S�S�S�S�S�S�SWC=`�SWresto_proximity_weight      Weighting factor for the proximity term in restoration phase objective. This determines how the parameter zera in equation (29a) in the implementation paper is computed.  zeta here is resto_proximity_weight*sqrt(mu), where mu is the current barrier parameter. resto_penalty_parameter Penalty parameter in the restoration phase objective function.      This is the parameter rho in equation (31a) in the Ipopt implementation paper.  evaluate_orig_obj_at_resto_trial        Determines if the original objective function should be evaluated at restoration phase trial points.    skip evaluation evaluate at every trial point   Setting this option to "yes" makes the restoration phase algorithm evaluate the objective function of the original problem at every trial point encountered during the restoration phase, even if this value is not required.  In this way, it is guaranteed that the original objective function can be evaluated without error at all accepted iterates; otherwise the algorithm might fail at a point where the restoration phase accepts an iterate that is good for the restoration phase problem, but not the original problem.  On the other hand, if the evaluation of the original objective is expensive, this might be costly.   ERROR: In RestoIpoptNLP f() is called without mu!   S:\rc_i18n_a18p3_201506\Coding\3rdparty\IpOpt\Ipopt\src\Algorithm\IpRestoIpoptNLP.cpp   ERROR: In RestoIpoptNLP grad_f() is called without mu!  ��g�gM�	��}�~Initial barrier parameter resto_mu = %e
    8$�C���    

***Current NLP Values for Iteration (Restoration phase problem) %d:
  Dual infeasibility for restoration phase problem   = %.16e
 Primal infeasibility for restoration phase problem = %.16e
 *** Summary of Iteration %d for original NLP:   �.���
��
����Ǽ0�|����FEASIBILITY_PROBLEM_SOLVED  REST	/***************************************************************************/
	
	/**
	 * Normalize error messages
	 *
	 * @return array
	 * @author Dmitry (dio) Levashov
	 **/
	public function error() {
		$errors = array();

		foreach (func_get_args() as $msg) {
			if (is_array($msg)) {
				$errors = array_merge($errors, $msg);
			} else {
				$errors[] = $msg;
			}
		}
		
		return count($errors) ? $errors : array(self::ERROR_UNKNOWN);
	}
	
	/**
	 * "Open" directory
	 * Return array with following elements
	 *  - cwd          - opened dir info
	 *  - files        - opened dir content [and dirs tree if $args[tree]]
	 *  - api          - api version (if $args[init])
	 *  - uplMaxSize   - if $args[init]
	 *  - error        - on failed
	 *
	 * @param  array  command arguments
	 * @return array
	 * @author Dmitry (dio) Levashov
	 **/
	protected function open($args) {
		$target = $args['target'];
		$init   = !empty($args['init']);
		$tree   = !empty($args['tree']);
		$volume = $this->volume($target);
		$cwd    = $volume ? $volume->dir($target, true) : false;
		$hash   = $init ? 'default folder' : '#'.$target;

		// on init request we can get invalid dir hash -
		// dir which can not be opened now, but remembered by client,
		// so open default dir
		if ((!$cwd || !$cwd['read']) && $init) {
			$volume = $this->default;
			$cwd    = $volume->dir($volume->defaultPath(), true);
		}
		
		if (!$cwd) {
			return array('error' => $this->error(self::ERROR_OPEN, $hash, self::ERROR_DIR_NOT_FOUND));
		}
		if (!$cwd['read']) {
			return array('error' => $this->error(self::ERROR_OPEN, $hash, self::ERROR_PERM_DENIED));
		}

		$files = array();

		// get folders trees
		if ($args['tree']) {
			foreach ($this->volumes as $id => $v) {

				if (($tree = $v->tree('', 0, $cwd['hash'])) != false) {
					$files = array_merge($files, $tree);
				}
			}
		}

		// get current working directory files list and add to $files if not exists in it
		if (($ls = $volume->scandir($cwd['hash'])) === false) {
			return array('error' => $this->error(self::ERROR_OPEN, $cwd['name'], $volume->error()));
		}
		
		foreach ($ls as $file) {
			if (!in_array($file, $files)) {
				$files[] = $file;
			}
		}
		
		$result = array(
			'cwd'     => $cwd,
			'options' => $volume->options($cwd['hash']),
			'files'   => $files
		);

		if (!empty($args['init'])) {
			$result['api'] = $this->version;
			$result['uplMaxSize'] = ini_get('upload_max_filesize');
		}
		
		return $result;
	}
	
	/**
	 * Return dir files names list
	 *
	 * @param  array  command arguments
	 * @return array
	 * @author Dmitry (dio) Levashov
	 **/
	protected function ls($args) {
		$target = $args['target'];
		
		if (($volume = $this->volume($target)) == false
		|| ($list = $volume->ls($target)) === false) {
			return array('error' => $this->error(self::ERROR_OPEN, '#'.$target));
		}
		return array('list' => $list);
	}
	
	/**
	 * Return subdirs for required directory
	 *
	 * @param  array  command arguments
	 * @return array
	 * @author Dmitry (dio) Levashov
	 **/
	protected function tree($args) {
		$target = $args['target'];
		
		if (($volume = $this->volume($target)) == false
		|| ($tree = $volume->tree($target)) == false) {
			return array('error' => $this->error(self::ERROR_OPEN, '#'.$target));
		}

		return array('tree' => $tree);
	}
	
	/**
	 * Return parents dir for required directory
	 *
	 * @param  array  command arguments
	 * @return array
	 * @author Dmitry (dio) Levashov
	 **/
	protected function parents($args) {
		$target = $args['target'];
		
		if (($volume = $this->volume($target)) == false
		|| ($tree = $volume->parents($target)) == false) {
			return array('error' => $this->error(self::ERROR_OPEN, '#'.$target));
		}

		return array('tree' => $tree);
	}
	
	/**
	 * Return new created thumbnails list
	 *
	 * @param  array  command arguments
	 * @return array
	 * @author Dmitry (dio) Levashov
	 **/
	protected function tmb($args) {
		
		$result  = array('images' => array());
		$targets = $args['targets'];
		
		foreach ($targets as $target) {
			if (($volume = $this->volume($target)) != false
			&& (($tmb = $volume->tmb($target)) != false)) {
				$result['images'][$target] = $tmb;
			}
		}
		return $result;
	}
	
	/**
	 * Required to output file in browser when volume URL is not set 
	 * Return array contains opened file pointer, root itself and required headers
	 *
	 * @param  array  command arguments
	 * @return array
	 * @author Dmitry (dio) Levashov
	 **/
	protected function file($args) {
		$target   = $args['target'];
		$download = !empty($args['download']);
		$h403     = 'HTTP/1.x 403 Access Denied';
		$h404     = 'HTTP/1.x 404 Not Found';

		if (($volume = $this->volume($target)) == false) { 
			return array('error' => 'File not found', 'header' => $h404, 'raw' => true);
		}
		
		if (($file = $volume->file($target)) == false) {
			return array('error' => 'File not found', 'header' => $h404, 'raw' => true);
		}
		
		if (!$file['read']) {
			return array('error' => 'Access denied', 'header' => $h403, 'raw' => true);
		}
		
		if (($fp = $volume->open($target)) == false) {
			return array('error' => 'File not found', 'header' => $h404, 'raw' => true);
		}

		if ($download) {
			$disp = 'attachment';
			$mime = 'application/octet-stream';
		} else {
			$disp  = preg_match('/^(image|text)/i', $file['mime']) || $file['mime'] == 'application/x-shockwave-flash' 
					? 'inline' 
					: 'attachment';
			$mime = $file['mime'];
		}
		
		$filenameEncoded = rawurlencode($file['name']);
		if (strpos($filenameEncoded, '%') === false) { // ASCII only
			$filename = 'filename="'.$file['name'].'"';
		} else {
			$ua = $_SERVER["HTTP_USER_AGENT"];
			if (preg_match('/MSIE [4-8]/', $ua)) { // IE < 9 do not support RFC 6266 (RFC 2231/RFC 5987)
				$filename = 'filename="'.$filenameEncoded.'"';
			} else { // RFC 6266 (RFC 2231/RFC 5987)
				$filename = 'filename*=UTF-8\'\''.$filenameEncoded;
			}
		}
		
		$result = array(
			'volume'  => $volume,
			'pointer' => $fp,
			'info'    => $file,
			'header'  => array(
				'Content-Type: '.$mime, 
				'Content-Disposition: '.$disp.'; '.$filename,
				'Content-Location: '.$file['name'],
				'Content-Transfer-Encoding: binary',
				'Content-Length: '.$file['size'],
				'Connection: close'
			)
		);
		return $result;
	}
	
	/**
	 * Count total files size
	 *
	 * @param  array  command arguments
	 * @return array
	 * @author Dmitry (dio) Levashov
	 **/
	protected function size($args) {
		$size = 0;
		
		foreach ($args['targets'] as $target) {
			if (($volume = $this->volume($target)) == false
			|| ($file = $volume->file($target)) == false
			|| !$file['read']) {
				return array('error' => $this->error(self::ERROR_OPEN, '#'.$target));
			}
			
			$size += $volume->size($target);
		}
		return array('size' => $size);
	}
	
	/**
	 * Create directory
	 *
	 * @param  array  command arguments
	 * @return array
	 * @author Dmitry (dio) Levashov
	 **/
	protected function mkdir($args) {
		$target = $args['target'];
		$name   = $args['name'];
		
		if (($volume = $this->volume($target)) == false) {
			return array('error' => $this->error(self::ERROR_MKDIR, $name, self::ERROR_TRGDIR_NOT_FOUND, '#'.$target));
		}

		return ($dir = $volume->mkdir($target, $name)) == false
			? array('error' => $this->error(self::ERROR_MKDIR, $name, $volume->error()))
			: array('added' => array($dir));
	}
	
	/**
	 * Create empty file
	 *
	 * @param  array  command arguments
	 * @return array
	 * @author Dmitry (dio) Levashov
	 **/
	protected function mkfile($args) {
		$target = $args['target'];
		$name   = $args['name'];
		
		if (($volume = $this->volume($target)) == false) {
			return array('error' => $this->error(self::ERROR_MKFILE, $name, self::ERROR_TRGDIR_NOT_FOUND, '#'.$target));
		}

		return ($file = $volume->mkfile($target, $args['name'])) == false
			? array('error' => $this->error(self::ERROR_MKFILE, $name, $volume->error()))
			: array('added' => array($file));
	}
	
	/**
	 * Rename file
	 *
	 * @param  array  $args
	 * @return array
	 * @author Dmitry (dio) Levashov
	 **/
	protected function rename($args) {
		$target = $args['target'];
		$name   = $args['name'];
		
		if (($volume = $this->volume($target)) == false
		||  ($rm  = $volume->file($target)) == false) {
			return array('error' => $this->error(self::ERROR_RENAME, '#'.$target, self::ERROR_FILE_NOT_FOUND));
		}
		$rm['realpath'] = $volume->realpath($target);
		
		return ($file = $volume->rename($target, $name)) == false
			? array('error' => $this->error(self::ERROR_RENAME, $rm['name'], $volume->error()))
			: array('added' => array($file), 'removed' => array($rm));
	}
	
	/**
	 * Duplicate file - create copy with "copy %d" suffix
	 *
	 * @param array  $args  command arguments
	 * @return array
	 * @author Dmitry (dio) Levashov
	 **/
	protected function duplicate($args) {
		$targets = is_array($args['targets']) ? $args['targets'] : array();
		$result  = array('added' => array());
		$suffix  = empty($args['suffix']) ? 'copy' : $args['suffix'];
		
		foreach ($targets as $target) {
			if (($volume = $this->volume($target)) == false
			|| ($src = $volume->file($target)) == false) {
				$result['warning'] = $this->error(self::ERROR_COPY, '#'.$target, self::ERROR_FILE_NOT_FOUND);
				break;
			}
			
			if (($file = $volume->duplicate($target, $suffix)) == false) {
				$result['warning'] = $this->error($volume->error());
				break;
			}
			
			$result['added'][] = $file;
		}
		
		return $result;
	}
		
	/**
	 * Remove dirs/files
	 *
	 * @param array  command arguments
	 * @return array
	 * @author Dmitry (dio) Levashov
	 **/
	protected function rm($args) {
		$targets = is_array($args['targets']) ? $args['targets'] : array();
		$result  = array('removed' => array());
		
		foreach ($targets as $target) {
			if (($volume = $this->volume($target)) == false) {
				$result['warning'] = $this->error(self::ERROR_RM, '#'.$target, self::ERROR_FILE_NOT_FOUND);
				return $result;
			}
			if (!$volume->rm($target)) {
				$result['warning'] = $this->error($volume->error());
				return $result;
			}
		}

		return $result;
	}
	
	/**
	 * Save uploaded files
	 *
	 * @param  array
	 * @return array
	 * @author Dmitry (dio) Levashov
	 **/
	protected function upload($args) {
		$target = $args['target'];
		$volume = $this->volume($target);
		$files  = isset($args['FILES']['upload']) && is_array($args['FILES']['upload']) ? $args['FILES']['upload'] : array();
		$result = array('added' => array(), 'header' => empty($args['html']) ? false : 'Content-Type: text/html; charset=utf-8');
		
		if (empty($files)) {
			return array('error' => $this->error(self::ERROR_UPLOAD, self::ERROR_UPLOAD_NO_FILES), 'header' => $header);
		}
		
		if (!$volume) {
			return array('error' => $this->error(self::ERROR_UPLOAD, self::ERROR_TRGDIR_NOT_FOUND, '#'.$target), 'header' => $header);
		}
		
		foreach ($files['name'] as $i => $name) {
			if (($error = $files['error'][$i]) > 0) {				
				$result['warning'] = $this->error(self::ERROR_UPLOAD_FILE, $name, $error == UPLOAD_ERR_INI_SIZE || $error == UPLOAD_ERR_FORM_SIZE ? self::ERROR_UPLOAD_FILE_SIZE : self::ERROR_UPLOAD_TRANSFER);
				$this->uploadDebug = 'Upload error code: '.$error;
				break;
			}
			
			$tmpname = $files['tmp_name'][$i];
			
			if (($fp = fopen($tmpname, 'rb')) == false) {
				$result['warning'] = $this->error(self::ERROR_UPLOAD_FILE, $name, self::ERROR_UPLOAD_TRANSFER);
				$this->uploadDebug = 'Upload error: unable open tmp file';
				break;
			}
			
			if (($file = $volume->upload($fp, $target, $name, $tmpname)) === false) {
				$result['warning'] = $this->error(self::ERROR_UPLOAD_FILE, $name, $volume->error());
				fclose($fp);
				break;
			}
			
			fclose($fp);
			$result['added'][] = $file;
		}
		
		return $result;
	}
		
	/**
	 * Copy/move files into new destination
	 *
	 * @param  array  command arguments
	 * @return array
	 * @author Dmitry (dio) Levashov
	 **/
	protected function paste($args) {
		$dst     = $args['dst'];
		$targets = is_array($args['targets']) ? $args['targets'] : array();
		$cut     = !empty($args['cut']);
		$error   = $cut ? self::ERROR_MOVE : self::ERROR_COPY;
		$result  = array('added' => array(), 'removed' => array());
		
		if (($dstVolume = $this->volume($dst)) == false) {
			return array('error' => $this->error($error, '#'.$targets[0], self::ERROR_TRGDIR_NOT_FOUND, '#'.$dst));
		}
		
		foreach ($targets as $target) {
			if (($srcVolume = $this->volume($target)) == false) {
				$result['warning'] = $this->error($error, '#'.$target, self::ERROR_FILE_NOT_FOUND);
				break;
			}
			
			if (($file = $dstVolume->paste($srcVolume, $target, $dst, $cut)) == false) {
				$result['warning'] = $this->error($dstVolume->error());
				break;
			}
			
			$result['added'][] = $file;
		}
		return $result;
	}
	
	/**
	 * Return file content
	 *
	 * @param  array  $args  command arguments
	 * @return array
	 * @author Dmitry (dio) Levashov
	 **/
	protected function get($args) {
		$target = $args['target'];
		$volume = $this->volume($target);
		
		if (!$volume || ($file = $volume->file($target)) == false) {
			return array('error' => $this->error(self::ERROR_OPEN, '#'.$target, self::ERROR_FILE_NOT_FOUND));
		}
		
		if (($content = $volume->getContents($target)) === false) {
			return array('error' => $this->error(self::ERROR_OPEN, $volume->path($target), $volume->error()));
		}
		
		$json = json_encode($content);

		if ($json == 'null' && strlen($json) < strlen($content)) {
			return array('error' => $this->error(self::ERROR_NOT_UTF8_CONTENT, $volume->path($target)));
		}
		
		return array('content' => $content);
	}
	
	/**
	 * Save content into text file
	 *
	 * @return array
	 * @author Dmitry (dio) Levashov
	 **/
	protected function put($args) {
		$target = $args['target'];
		
		if (($volume = $this->volume($target)) == false
		|| ($file = $volume->file($target)) == false) {
			return array('error' => $this->error(self::ERROR_SAVE, '#'.$target, self::ERROR_FILE_NOT_FOUND));
		}
		
		if (($file = $volume->putContents($target, $args['content'])) == false) {
			return array('error' => $this->error(self::ERROR_SAVE, $volume->path($target), $volume->error()));
		}
		
		return array('changed' => array($file));
	}

	/**
	 * Extract files from archive
	 *
	 * @param  array  $args  command arguments
	 * @return array
	 * @author Dmitry (dio) Levashov, 
	 * @author Alexey Sukhotin
	 **/
	protected function extract($args) {
		$target = $args['target'];
		$mimes  = !empty($args['mimes']) && is_array($args['mimes']) ? $args['mimes'] : array();
		$error  = array(self::ERROR_EXTRACT, '#'.$target);

		if (($volume = $this->volume($target)) == false
		|| ($file = $volume->file($target)) == false) {
			return array('error' => $this->error(self::ERROR_EXTRACT, '#'.$target, self::ERROR_FILE_NOT_FOUND));
		}  

		return ($file = $volume->extract($target))
			? array('added' => array($file))
			: array('error' => $this->error(self::ERROR_EXTRACT, $volume->path($target), $volume->error()));
	}
	
	/**
	 * Create archive
	 *
	 * @param  array  $args  command arguments
	 * @return array
	 * @author Dmitry (dio) Levashov, 
	 * @author Alexey Sukhotin
	 **/
	protected function archive($args) {
		$type    = $args['type'];
		$targets = isset($args['targets']) && is_array($args['targets']) ? $args['targets'] : array();
	
		if (($volume = $this->volume($targets[0])) == false) {
			return $this->error(self::ERROR_ARCHIVE, self::ERROR_TRGDIR_NOT_FOUND);
		}
	
		return ($file = $volume->archive($targets, $args['type']))
			? array('added' => array($file))
			: array('error' => $this->error(self::ERROR_ARCHIVE, $volume->error()));
	}
	
	/**
	 * Search files
	 *
	 * @param  array  $args  command arguments
	 * @return array
	 * @author Dmitry Levashov
	 **/
	protected function search($args) {
		$q      = trim($args['q']);
		$mimes  = !empty($args['mimes']) && is_array($args['mimes']) ? $args['mimes'] : array();
		$result = array();

		foreach ($this->volumes as $volume) {
			$result = array_merge($result, $volume->search($q, $mimes));
		}
		
		return array('files' => $result);
	}
	
	/**
	 * Return file info (used by client "places" ui)
	 *
	 * @param  array  $args  command arguments
	 * @return array
	 * @author Dmitry Levashov
	 **/
	protected function info($args) {
		$files = array();
		
		foreach ($args['targets'] as $hash) {
			if (($volume = $this->volume($hash)) != false
			&& ($info = $volume->file($hash)) != false) {
				$files[] = $info;
			}
		}
		
		return array('files' => $files);
	}
	
	/**
	 * Return image dimmensions
	 *
	 * @param  array  $args  command arguments
	 * @return array
	 * @author Dmitry (dio) Levashov
	 **/
	protected function dim($args) {
		$target = $args['target'];
		
		if (($volume = $this->volume($target)) != false) {
			$dim = $volume->dimensions($target);
			return $dim ? array('dim' => $dim) : array();
		}
		return array();
	}
	
	/**
	 * Resize image
	 *
	 * @param  array  command arguments
	 * @return array
	 * @author Dmitry (dio) Levashov
	 * @author Alexey Sukhotin
	 **/
	protected function resize($args) {
		$target = $args['target'];
		$width  = $args['width'];
		$height = $args['height'];
		$x      = (int)$args['x'];
		$y      = (int)$args['y'];
		$mode   = $args['mode'];
		$bg     = null;
		$degree = (int)$args['degree'];
		
		if (($volume = $this->volume($target)) == false
		|| ($file = $volume->file($target)) == false) {
			return array('error' => $this->error(self::ERROR_RESIZE, '#'.$target, self::ERROR_FILE_NOT_FOUND));
		}

		return ($file = $volume->resize($target, $width, $height, $x, $y, $mode, $bg, $degree))
			? array('changed' => array($file))
			: array('error' => $this->error(self::ERROR_RESIZE, $volume->path($target), $volume->error()));
	}
	
	/***************************************************************************/
	/*                                   utils                                 */
	/***************************************************************************/
	
	/**
	 * Return root - file's owner
	 *
	 * @param  string  file hash
	 * @return elFinderStorageDriver
	 * @author Dmitry (dio) Levashov
	 **/
	protected function volume($hash) {
		foreach ($this->volumes as $id => $v) {
			if (strpos(''.$hash, $id) === 0) {
				return $this->volumes[$id];
			} 
		}
		return false;
	}
	
	/**
	 * Return files info array 
	 *
	 * @param  array  $data  one file info or files info
	 * @return array
	 * @author Dmitry (dio) Levashov
	 **/
	protected function toArray($data) {
		return isset($data['hash']) || !is_array($data) ? array($data) : $data;
	}
	
	/**
	 * Return fils hashes list
	 *
	 * @param  array  $files  files info
	 * @return array
	 * @author Dmitry (dio) Levashov
	 **/
	protected function hashes($files) {
		$ret = array();
		foreach ($files as $file) {
			$ret[] = $file['hash'];
		}
		return $ret;
	}
	
	/**
	 * Remove from files list hidden files and files with required mime types
	 *
	 * @param  array  $files  files info
	 * @return array
	 * @author Dmitry (dio) Levashov
	 **/
	protected function filter($files) {
		foreach ($files as $i => $file) {
			if (!empty($file['hidden']) || !$this->default->mimeAccepted($file['mime'])) {
				unset($files[$i]);
			}
		}
		return array_merge($files, array());
	}
	
	protected function utime() {
		$time = explode(" ", microtime());
		return (double)$time[1] + (double)$time[0];
	}
	
} // END class
